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

/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

if(ob_get_level() < 1)
	ob_start();
ob_implicit_flush(1);

// load the generated persistence file if found
$persistence = array();
if(file_exists(getcwd().'/modules/UpgradeWizard/_persistence.php')) {
	require_once(getcwd().'/modules/UpgradeWizard/_persistence.php');
}
if(!function_exists('getFilesForPermsCheck')) {
	require_once('modules/UpgradeWizard/uw_utils.php');	
}
if(!isset($sugar_config) || empty($sugar_config)) {
		
}
if(!function_exists('unzip')) {
	require_once('include/utils/zip_utils.php');
}

switch($_REQUEST['preflightStep']) {
	case 'find_upgrade_files':
		logThis('preflightJson finding upgrade files');
		ob_end_flush();
		$persistence['upgrade_files'] = preflightCheckJsonFindUpgradeFiles();
	break;
	
	case 'diff_upgrade_files':
		logThis('preflightJson diffing upgrade files');
		ob_end_flush();
		$persistence = preflightCheckJsonDiffFiles();
	break;
	
	case 'get_diff_results':
		logThis('preflightJson getting diff results for display');
		ob_end_flush();
		$persistence = preflightCheckJsonGetDiff();
	break;
	
	case 'get_diff_errors':
		logThis('preflightJson getting diff errors (if any)');
		preflightCheckJsonGetDiffErrors();
	break;
}	

write_array_to_file('persistence', $persistence, 'modules/UpgradeWizard/_persistence.php');
?>