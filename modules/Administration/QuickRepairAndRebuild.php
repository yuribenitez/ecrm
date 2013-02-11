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


class RepairAndClear
{
    public $module_list;
    public $show_output;
    protected $actions;
    public $execute;
    protected $module_list_from_cache;

    public function repairAndClearAll($selected_actions, $modules, $autoexecute=false, $show_output=true)
    {
        global $mod_strings;
        $this->module_list= $modules;
        $this->show_output = $show_output;
        $this->actions = $selected_actions;
        $this->actions[] = 'repairDatabase';
        $this->execute=$autoexecute;

        //clear vardefs always..
        $this->clearVardefs();
        //first  clear the language cache.
        $this->clearLanguageCache();
        foreach ($this->actions as $current_action)
        switch($current_action)
        {
            case 'repairDatabase':
                if(in_array($mod_strings['LBL_ALL_MODULES'], $this->module_list))
                    $this->repairDatabase();
                else
                    $this->repairDatabaseSelectModules();
                break;
            case 'rebuildExtensions':
                $this->rebuildExtensions();
                break;
            case 'clearTpls':
                $this->clearTpls();
                break;
            case 'clearJsFiles':
                $this->clearJsFiles();
                break;
            case 'clearDashlets':
                $this->clearDashlets();
                break;
            case 'clearSugarFeedCache':
                $this->clearSugarFeedCache();
                break;
            case 'clearThemeCache':
                $this->clearThemeCache();
                break;
            case 'clearVardefs':
                $this->clearVardefs();
                break;
            case 'clearJsLangFiles':
                $this->clearJsLangFiles();
                break;
            case 'rebuildAuditTables':
                $this->rebuildAuditTables();
                break;
            case 'clearSearchCache':
                $this->clearSearchCache();
                break;
            case 'clearPDFFontCache':
                $this->clearPDFFontCache();
                break;
            case 'clearAll':
                $this->clearTpls();
                $this->clearJsFiles();
                $this->clearVardefs();
                $this->clearJsLangFiles();
                $this->clearLanguageCache();
                $this->clearDashlets();
                $this->clearSugarFeedCache();
                $this->clearSmarty();
                $this->clearThemeCache();
                $this->clearXMLfiles();
                $this->clearSearchCache();
                $this->clearExternalAPICache();
                $this->clearPDFFontCache();
                $this->rebuildExtensions();
                $this->rebuildAuditTables();
                $this->repairDatabase();
                break;
        }
    }

	/////////////OLD


	public function repairDatabase()
	{
		global $dictionary, $mod_strings;
		if(false == $this->show_output)
			$_REQUEST['repair_silent']='1';
		$_REQUEST['execute']=$this->execute;
        $GLOBALS['reload_vardefs'] = true;
        $hideModuleMenu = true;
		include_once('modules/Administration/repairDatabase.php');
	}

	public function repairDatabaseSelectModules()
	{
		global $current_user, $mod_strings, $dictionary;
		set_time_limit(3600);

		include('include/modules.php'); //bug 15661
		$db = DBManagerFactory::getInstance();

		if (is_admin($current_user) || is_admin_for_any_module($current_user))
		{
			$export = false;
    		if($this->show_output) echo getClassicModuleTitle($mod_strings['LBL_REPAIR_DATABASE'], array($mod_strings['LBL_REPAIR_DATABASE']), false);
            if($this->show_output) {
                echo "<h1 id=\"rdloading\">{$mod_strings['LBL_REPAIR_DATABASE_PROCESSING']}</h1>";
                ob_flush();
            }
	    	$sql = '';
			if($this->module_list && !in_array($mod_strings['LBL_ALL_MODULES'],$this->module_list))
			{
				$repair_related_modules = array_keys($dictionary);
				//repair DB
				$dm = !empty($GLOBALS['sugar_config']['developerMode']);
				$GLOBALS['sugar_config']['developerMode'] = true;
				foreach($this->module_list as $bean_name)
				{

					if (isset($beanFiles[$bean_name]) && file_exists($beanFiles[$bean_name]))
					{
						require_once($beanFiles[$bean_name]);
						$GLOBALS['reload_vardefs'] = true;
						$focus = new $bean_name ();
						#30273
						if($focus->disable_vardefs == false) {
							include('modules/' . $focus->module_dir . '/vardefs.php');


							if($this->show_output)
								print_r("<p>" .$mod_strings['LBL_REPAIR_DB_FOR'].' '. $bean_name . "</p>");
							$sql .= $db->repairTable($focus, $this->execute);
						}
					}
				}

				$GLOBALS['sugar_config']['developerMode'] = $dm;

		        if ($this->show_output) echo "<script type=\"text/javascript\">document.getElementById('rdloading').style.display = \"none\";</script>";
	    		if (isset ($sql) && !empty ($sql))
	    		{
					$qry_str = "";
					foreach (explode("\n", $sql) as $line) {
						if (!empty ($line) && substr($line, -2) != "*/") {
							$line .= ";";
						}

						$qry_str .= $line . "\n";
					}
					if ($this->show_output){
						echo "<h3>{$mod_strings['LBL_REPAIR_DATABASE_DIFFERENCES']}</h3>";
						echo "<p>{$mod_strings['LBL_REPAIR_DATABASE_TEXT']}</p>";

						echo "<form method=\"post\" action=\"index.php?module=Administration&amp;action=repairDatabase\">";
						echo "<textarea name=\"sql\" rows=\"24\" cols=\"150\" id=\"repairsql\">$qry_str</textarea>";
						echo "<br /><input type=\"submit\" value=\"".$mod_strings['LBL_REPAIR_DATABASE_EXECUTE']."\" name=\"raction\" /> <input type=\"submit\" name=\"raction\" value=\"".$mod_strings['LBL_REPAIR_DATABASE_EXPORT']."\" />";
					}
				}
				else
					if ($this->show_output) echo "<h3>{$mod_strings['LBL_REPAIR_DATABASE_SYNCED']}</h3>";
			}

		}
		else {
			sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
		}
	}

	public function rebuildExtensions()
	{
		global $mod_strings;
		if($this->show_output) echo $mod_strings['LBL_QR_REBUILDEXT'];
		global $current_user;
		require_once('ModuleInstall/ModuleInstaller.php');
		$mi = new ModuleInstaller();
		$mi->rebuild_all(!$this->show_output);

		// Remove the "Rebuild Extensions" red text message on admin logins

        if($this->show_output) echo $mod_strings['LBL_REBUILD_REL_UPD_WARNING'];

        // clear the database row if it exists (just to be sure)
        $query = "DELETE FROM versions WHERE name='Rebuild Extensions'";
        $GLOBALS['log']->info($query);
        $GLOBALS['db']->query($query);

        // insert a new database row to show the rebuild extensions is done
        $id = create_guid();
        $gmdate = gmdate('Y-m-d H:i:s');
        $date_entered = db_convert("'$gmdate'", 'datetime');
        $query = 'INSERT INTO versions (id, deleted, date_entered, date_modified, modified_user_id, created_by, name, file_version, db_version) '
            . "VALUES ('$id', '0', $date_entered, $date_entered, '1', '1', 'Rebuild Extensions', '4.0.0', '4.0.0')";
        $GLOBALS['log']->info($query);
        $GLOBALS['db']->query($query);

        // unset the session variable so it is not picked up in DisplayWarnings.php
        if(isset($_SESSION['rebuild_extensions'])) {
            unset($_SESSION['rebuild_extensions']);
        }
	}

	//Cache Clear Methods
	public function clearSmarty()
	{
		global $mod_strings;
		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARSMARTY']}</h3>";
		$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'smarty/templates_c', '.tpl.php');
	}
	public function clearXMLfiles()
	{
		global $mod_strings;
		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_XMLFILES']}</h3>";
		$this->_clearCache($GLOBALS['sugar_config']['tmp_dir'], '.xml');

		include('modules/Versions/ExpectedVersions.php');

        global $expect_versions;

        if (isset($expect_versions['Chart Data Cache'])) {
            $version = new Version();
            $version->retrieve_by_string_fields(array('name'=>'Chart Data Cache'));

            $version->name = $expect_versions['Chart Data Cache']['name'];
            $version->file_version = $expect_versions['Chart Data Cache']['file_version'];
            $version->db_version = $expect_versions['Chart Data Cache']['db_version'];
            $version->save();
        }
	}
	public function clearDashlets()
	{
		global $mod_strings;
		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARDASHLET']}</h3>";
		$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'dashlets', '.php');
	}
    public function clearThemeCache()
    {
		global $mod_strings;
		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARTHEMECACHE']}</h3>";
		SugarThemeRegistry::clearAllCaches();
	}
	public function clearSugarFeedCache()
	{
		global $mod_strings;
		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARSUGARFEEDCACHE']}</h3>";

        SugarFeed::flushBackendCache();
	}
	public function clearTpls()
	{
		global $mod_strings;
		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARTEMPLATE']}</h3>";
		if(!in_array( translate('LBL_ALL_MODULES'),$this->module_list) && !empty($this->module_list))
		{
			foreach($this->module_list as $module_name_singular )
				$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'modules/'.$this->_getModuleNamePlural($module_name_singular), '.tpl');
		}
		else
			$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'modules', '.tpl');
	}
	public function clearVardefs()
	{
		global $mod_strings;
		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARVADEFS']}</h3>";
		if(!empty($this->module_list) && is_array($this->module_list) && !in_array( translate('LBL_ALL_MODULES'),$this->module_list))
		{
			foreach($this->module_list as $module_name_singular )
				$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'modules/'.$this->_getModuleNamePlural($module_name_singular), 'vardefs.php');
		}
		else
			$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'modules', 'vardefs.php');
	}
	public function clearJsFiles()
	{
		global $mod_strings;
		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARJS']}</h3>";

		if(!in_array( translate('LBL_ALL_MODULES'),$this->module_list) && !empty($this->module_list))
		{
			foreach($this->module_list as $module_name_singular )
				$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'modules/'.$this->_getModuleNamePlural($module_name_singular), '.js');
		}

		else
			$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'modules', '.js');

	}
	public function clearJsLangFiles()
	{
		global $mod_strings;
		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARJSLANG']}</h3>";
		if(!in_array(translate('LBL_ALL_MODULES'),$this->module_list ) && !empty($this->module_list))
		{
			foreach($this->module_list as $module_name_singular )
				$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'jsLanguage/'.$this->_getModuleNamePlural($module_name_singular), '.js');
		}
		else
			$this->_clearCache($GLOBALS['sugar_config']['cache_dir'].'jsLanguage', '.js');
	}
	/**
	 * Remove the language cache files from cache/modules/<module>/language
	 */
	public function clearLanguageCache()
	{
		global $mod_strings;

		if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARLANG']}</h3>";
		//clear cache using the list $module_list_from_cache
		if ( !empty($this->module_list) && is_array($this->module_list) ) {
            if( in_array(translate('LBL_ALL_MODULES'), $this->module_list))
            {
                LanguageManager::clearLanguageCache();
            }
            else { //use the modules selected thrut the select list.
                foreach($this->module_list as $module_name)
                    LanguageManager::clearLanguageCache($module_name);
            }
        }
	}

	/**
	 * Remove the cached unified_search_modules.php file
	 */
    public function clearSearchCache() {
        global $mod_strings, $sugar_config;
        if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARSEARCH']}</h3>";
        $search_dir='cache/';
        if (!empty($sugar_config['cache_dir'])) {
            $search_dir=$sugar_config['cache_dir'];
        }
        $src_file = $search_dir . 'modules/unified_search_modules.php';
        if(file_exists($src_file)) {
            unlink( "$src_file" );
        }
    }
    public function clearExternalAPICache()
	{
        global $mod_strings, $sugar_config;
        if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEAR_EXT_API']}</h3>";
        require_once('include/externalAPI/ExternalAPIFactory.php');
        ExternalAPIFactory::clearCache();
    }
    public function clearPDFFontCache()
	{
        global $mod_strings, $sugar_config;
        if($this->show_output) echo "<h3>{$mod_strings['LBL_QR_CLEARPDFFONT']}</h3>";
        require_once('include/Sugarpdf/FontManager.php');
        $fontManager = new FontManager();
        $fontManager->clearCachedFile();
    }

	//////////////////////////////////////////////////////////////
	/////REPAIR AUDIT TABLES
	public function rebuildAuditTables()
	{
		global $mod_strings;
		include('include/modules.php');	//bug 15661
		if($this->show_output) echo "<h3> {$mod_strings['LBL_QR_REBUILDAUDIT']}</h3>";

		if(!in_array( translate('LBL_ALL_MODULES'), $this->module_list) && !empty($this->module_list))
		{
			foreach ($this->module_list as $bean_name){
				if( isset($beanFiles[$bean_name]) && file_exists($beanFiles[$bean_name])) {
					require_once($beanFiles[$bean_name]);
				    $this->_rebuildAuditTablesHelper(new $bean_name());
				}
			}
		} else if(in_array(translate('LBL_ALL_MODULES'), $this->module_list)) {
			foreach ($beanFiles as $bean => $file){
				if( file_exists($file)) {
					require_once($file);
				    $this->_rebuildAuditTablesHelper(new $bean());
				}
			}
		}
		if($this->show_output) echo $mod_strings['LBL_DONE'];
	}

	private function _rebuildAuditTablesHelper($focus)
	{
		global $mod_strings;

		// skip if not a SugarBean object
		if ( !($focus instanceOf SugarBean) )
		    return;

		if ($focus->is_AuditEnabled()) {
			if (!$focus->db->tableExists($focus->get_audit_table_name())) {
				if($this->show_output) echo $mod_strings['LBL_QR_CREATING_TABLE']." ".$focus->get_audit_table_name().' '.$mod_strings['LBL_FOR'].' '. $focus->object_name.'.<br/>';
				$focus->create_audit_table();
			} else {
				if($this->show_output){
					$echo=str_replace('%1$',$focus->object_name,$mod_strings['LBL_REBUILD_AUDIT_SKIP']);
					echo $echo;
				}
			}
		}else
			if($this->show_output) echo $focus->object_name.$mod_strings['LBL_QR_NOT_AUDIT_ENABLED'];
	}

	///////////////////////////////////////////////////////////////
	////END REPAIR AUDIT TABLES


	///////////////////////////////////////////////////////////////
	//// Recursively unlink all files of the given $extension in the given $thedir.
	//
	private function _clearCache($thedir, $extension)
	{
        if ($current = @opendir($thedir)) {
            while (false !== ($children = readdir($current))) {
                if ($children != "." && $children != "..") {
                    if (is_dir($thedir . "/" . $children)) {
                        $this->_clearCache($thedir . "/" . $children, $extension);
                    }
                    elseif (is_file($thedir . "/" . $children) && (substr_count($children, $extension))) {
                        unlink($thedir . "/" . $children);
                    }
                }
            }
        }
	}
	/////////////////////////////////////////////////////////////
	////////
	private function _getModuleNamePlural($module_name_singular)
	{
		global $beanList;
		while ($curr_module = current($beanList))
		{
			if ($curr_module == $module_name_singular)
				return key($beanList); //name of the module, plural.
			next($beanList);
		}
	}
}