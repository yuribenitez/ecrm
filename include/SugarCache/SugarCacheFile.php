<?php

/* * *******************************************************************************
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
 * ****************************************************************************** */


require_once('include/SugarCache/SugarCacheAbstract.php');

class SugarCacheFile extends SugarCacheAbstract
{

    /**
     * @var path and file which will store the cache used for this backend
     */
    protected $_cacheFileName = 'externalCache.php';

    /**
     * @var bool true if the cache has changed and needs written to disk
     */
    protected $_cacheChanged = false;

    /**
     * @see SugarCacheAbstract::$_priority
     */
    protected $_priority = 990;

    /**
     * @see SugarCacheAbstract::useBackend()
     */
    public function useBackend()
    {
        if (!parent::useBackend())
            return false;

        if (!empty($GLOBALS['sugar_config']['external_cache_enabled_file']))
            return true;

        return false;
    }

    /**
     * @see SugarCacheAbstract::__construct()
     *
     * For this backend, we'll read from the SugarCacheFile::_cacheFileName file into 
     * the SugarCacheFile::$localCache array.
     */
    public function __construct()
    {
        parent::__construct();

        if (isset($GLOBALS['sugar_config']['external_cache_filename']))
            $this->_cacheFileName = $GLOBALS['sugar_config']['external_cache_filename'];
    }

    /**
     * @see SugarCacheAbstract::__destruct()
     *
     * For this backend, we'll write the SugarCacheFile::$localCache array serialized out to a file
     */
    public function __destruct()
    {
        parent::__destruct();

        if ($this->_cacheChanged)
            sugar_file_put_contents($GLOBALS['sugar_config']['cache_dir'] . '/' . $this->_cacheFileName, serialize($this->_localStore));
    }

    /**
     * @see SugarCacheAbstract::_setExternal()
     *
     * Does nothing; we write to cache on destroy
     */
    protected function _setExternal(
    $key, $value
    )
    {
        $this->_cacheChanged = true;
    }

    /**
     * @see SugarCacheAbstract::_getExternal()
     */
    protected function _getExternal(
    $key
    )
    {
        // load up the external cache file
        if (sugar_is_file($GLOBALS['sugar_config']['cache_dir'] . '/' . $this->_cacheFileName))
            $this->localCache = unserialize(
                    file_get_contents($GLOBALS['sugar_config']['cache_dir'] . '/' . $this->_cacheFileName));

        if (isset($this->_localStore[$key]))
            return $this->_localStore[$key];
    }

    /**
     * @see SugarCacheAbstract::_clearExternal()
     *
     * Does nothing; we write to cache on destroy
     */
    protected function _clearExternal(
    $key
    )
    {
        $this->_cacheChanged = true;
    }

    /**
     * @see SugarCacheAbstract::_resetExternal()
     *
     * Does nothing; we write to cache on destroy
     */
    protected function _resetExternal()
    {
        $this->_cacheChanged = true;
    }

}
