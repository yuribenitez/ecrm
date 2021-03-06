<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/en/msa/master_subscription_agreement_11_April_2011.pdf
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


require_once('include/connectors/utils/ConnectorUtils.php');
require_once('include/connectors/sources/SourceFactory.php');
/**
 * Provides a factory to list, discover and create external API calls
 *
 * Main features are to list available external API's by supported features, modules and which ones have access for the user.
 **/
class ExternalAPIFactory
{
    /**
     * Filter the list of APIs, removing disabled ones
     * @param array $apiFullList
     * @return array Filtered list
     */
    public static function filterAPIList($apiFullList)
    {
        $filteredList = array();
        foreach($apiFullList as $name => $data) {
            if(isset($data['connector'])) {
                if(ConnectorUtils::eapmEnabled($data['connector'])) {
                     if(isset($data['authMethod']) && $data['authMethod'] == 'oauth'){
                        $connector = SourceFactory::getSource($data['connector'], false);
                        if(!empty($connector)) {
                            $key = $connector->getProperty('oauth_consumer_key');
                            $secret = $connector->getProperty('oauth_consumer_secret');
                            if(!empty($key) && !empty($secret)){
                                $filteredList[$name] = $data;
                            }
                        }
                     }else{
                        $filteredList[$name] = $data;
                     }
                }
            }else {
                $filteredList[$name] = $data;
            }
        }
        return $filteredList;
    }

    /**
     * Get the list of available APIs
     * @param bool $forceRebuild
     * @param bool $ignoreDisabled Should we ignore disabled status?
     * @return array
     */
    public static function loadFullAPIList($forceRebuild=false, $ignoreDisabled = false) {
        if ( isset($GLOBALS['sugar_config']['developer_mode']) && $GLOBALS['sugar_config']['developer_mode'] ) {
            static $beenHereBefore = false;
            if ( !$beenHereBefore ) {
                $forceRebuild = true;
                $beenHereBefore = true;
            }
        }
        if (!$forceRebuild && file_exists('cache/include/externalAPI.cache.php') ) {
            // Already have a cache file built, no need to rebuild
            require('cache/include/externalAPI.cache.php');

            return $ignoreDisabled?$fullAPIList:self::filterAPIList($fullAPIList);
        }

        $apiFullList = array();
        $meetingPasswordList = array();
        $needUrlList = array();

        $baseDirList = array('include/externalAPI/','custom/include/externalAPI');
        foreach ( $baseDirList as $baseDir ) {
            $dirList = glob($baseDir.'*',GLOB_ONLYDIR);
            foreach($dirList as $dir) {
                if ( $dir == $baseDir.'.' || $dir == $baseDir.'..' || $dir == $baseDir.'Base' ) {
                    continue;
                }

                $apiName = str_replace($baseDir,'',$dir);
                if ( file_exists($dir.'/ExtAPI'.$apiName.'.php') ) {
                    $apiFullList[$apiName]['className'] = 'ExtAPI'.$apiName;
                    $apiFullList[$apiName]['file'] = $dir.'/'.$apiFullList[$apiName]['className'].'.php';
                }
                if ( file_exists($dir.'/ExtAPI'.$apiName.'_cstm.php') ) {
                    $apiFullList[$apiName]['className'] = 'ExtAPI'.$apiName.'_cstm';
                    $apiFullList[$apiName]['file_cstm'] = $dir.'/'.$apiFullList[$apiName]['className'].'.php';
                }
            }
        }

        $optionList = array('supportedModules','useAuth','requireAuth','supportMeetingPassword','docSearch', 'authMethod', 'oauthFixed','needsUrl','canInvite','sendsInvites','sharingOptions','connector', 'oauthParams','restrictUploadsByExtension');
        foreach ( $apiFullList as $apiName => $apiOpts ) {
            require_once($apiOpts['file']);
            if ( !empty($apiOpts['file_cstm']) ) {
                require_once($apiOpts['file_cstm']);
            }
            $className = $apiOpts['className'];
            $apiClass = new $className();
            foreach ( $optionList as $opt ) {
                if ( isset($apiClass->$opt) ) {
                    $apiFullList[$apiName][$opt] = $apiClass->$opt;
                }
            }

            // Special handling for the show/hide of the Meeting Password field, we need to create a dropdown for the Sugar Logic code.
            if ( isset($apiClass->supportMeetingPassword) && $apiClass->supportMeetingPassword == true ) {
                $meetingPasswordList[$apiName] = $apiName;
            }

        }

        create_cache_directory('/include/');
        $fd = fopen('cache/include/externalAPI.cache-tmp.php','w');
        fwrite($fd,"<"."?php\n//This file is auto generated by ".__FILE__."\n\$fullAPIList = ".var_export($apiFullList,true).";\n\n");
        fclose($fd);
        rename('cache/include/externalAPI.cache-tmp.php','cache/include/externalAPI.cache.php');

        $fd = fopen('cache/include/externalAPI.cache-tmp.js','w');
        fwrite($fd,"//This file is auto generated by ".__FILE__."\nSUGAR.eapm = ".json_encode($apiFullList).";\n\n");
        fclose($fd);
        rename('cache/include/externalAPI.cache-tmp.js','cache/include/externalAPI.cache.js');


        if (is_array($GLOBALS['app_list_strings']['extapi_meeting_password']) && count(array_diff($meetingPasswordList,$GLOBALS['app_list_strings']['extapi_meeting_password'])) != 0 ) {
            // Our meeting password list is different... we need to do something about this.
            require_once('modules/Administration/Common.php');
            $languages = get_languages();
            foreach( $languages as $lang => $langLabel ) {
                $contents = return_custom_app_list_strings_file_contents($lang);
                $new_contents = replace_or_add_dropdown_type('extapi_meeting_password', $meetingPasswordList, $contents);
                save_custom_app_list_strings_contents($new_contents, $lang);
            }
        }

        return $ignoreDisabled?$apiFullList:self::filterAPIList($apiFullList);
    }

	/**
 	* Clear API cache file
 	*/
    public static function clearCache() {
        if ( file_exists('cache/include/externalAPI.cache.php') ) {
            unlink('cache/include/externalAPI.cache.php');
        }
        if ( file_exists('cache/include/externalAPI.cache.js') ) {
            unlink('cache/include/externalAPI.cache.js');
        }
    }


    /**
     * This will hand back an initialized class for the requested external API, it will also load in the external API password information into the bean.
     * @param string $apiName The name of the requested API ( known API's can be listed by the listAPI() call )
     * @param bool $apiName Ignore authentication requirements (optional)
     * @return ExternalAPIBase API plugin
     */
    public static function loadAPI($apiName, $ignoreAuth=false)
    {
        $apiList = self::loadFullAPIList();
        if ( ! isset($apiList[$apiName]) ) {
            return false;
        }

        $myApi = $apiList[$apiName];
        require_once($myApi['file']);
        if ( !empty($myApi['file_cstm']) ) {
            require_once($myApi['file_cstm']);
        }

        $apiClassName = $myApi['className'];

        $apiClass = new $apiClassName();
        if ($ignoreAuth) {
            return $apiClass;
        }

        if ($myApi['useAuth']) {
            $eapmBean = EAPM::getLoginInfo($apiName);

            if (!isset($eapmBean->application) && $myApi['requireAuth']) {
                // We need authentication, and they don't have it, don't load the API
                return false;
            }
        }

        if ( $myApi['useAuth'] && isset($eapmBean->application) ) {
            $apiClass->loadEAPM($eapmBean);
        }

        return $apiClass;
    }

    /**
     * Lists the available API's for a module or all modules, and possibly ignoring if the user has auth information for that API even if it is required
     * @param string $module Which module name you are searching for, leave blank to find all API's
     * @param bool $ignoreAuth Ignore API's demands for authentication (used to get a complete list of modules
     * @return API class
     */
    public static function listAPI($module = '', $ignoreAuth = false) {
        $apiList = self::loadFullAPIList();

        if ( $module == '' && $ignoreAuth == true ) {
            // Simplest case, return everything.
            return($apiList);
        }

        $apiFinalList = array();

        // Not such an easy case, we need to limit to specific modules and see if we have authentication (or not)
        foreach ( $apiList as $apiName => $apiOpts ) {
            if ( $module == '' || in_array($module,$apiOpts['supportedModules']) ) {
                // This matches the module criteria
                if ( $ignoreAuth || !$apiOpts['useAuth'] || !$apiOpts['requireAuth'] ) {
                    // Don't need to worry about authentication
                    $apiFinalList[$apiName] = $apiOpts;
                } else {
                    // We need to worry about authentication
                    $eapmBean = EAPM::getLoginInfo($apiName);
                    if ( isset($eapmBean->application) ) {
                        // We have authentication
                        $apiFinalList[$apiName] = $apiOpts;
                    }
                }
            }
        }

        return $apiFinalList;
    }

    /**
     * Get the array of API names available for cetain module
     * @param string $moduleName
     * @param bool $ignoreAuth Ignore if we have authentication details or not
     * @param bool $addEmptyEntry Add empty entry?
     */
     public static function getModuleDropDown($moduleName, $ignoreAuth = false, $addEmptyEntry = false) {
        global $app_list_strings;

        $apiList = self::listAPI($moduleName,$ignoreAuth);

        $apiDropdown = array();
        if($addEmptyEntry){
            $apiDropdown[''] = '';
        }

        foreach ( $apiList as $apiName => $ignore ) {

            if ( !empty($app_list_strings['eapm_list'][$apiName]) ) {
                $apiDropdown[$apiName] = $app_list_strings['eapm_list'][$apiName];
            } else {
                $apiDropdown[$apiName] = $apiName;
            }
        }

        return $apiDropdown;

    }
}