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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/




require_once('include/JSON.php');

global $app_strings;
//we don't want the parent module's string file, but rather the string file specifc to this subpanel
global $current_language, $current_module_strings;
$current_module_strings = return_module_language($current_language, 'WorkFlowTriggerShells');

global $currentModule;
global $focus;
global $action;

// focus_triggers_list is the means of passing data to a SubPanelView.
global $focus_triggers_list;
global $focus_trigger_filters_list;


$focus_all_triggers_list = array_merge($focus_triggers_list, $focus_trigger_filters_list);


global $app_strings;
$the_title = "<table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding-top:3px; margin-bottom: 0px; padding-bottom: 0px; margin-top: 3px;'>\n";
$module = preg_replace("/ /","",$mod_strings['LBL_MODULE_NAME']);
$the_title .= "<tr><td><table width='100%' cellpadding='0' cellspacing='0' border='0' style='padding-top:3px; margin-bottom: 0px; padding-bottom: 0px; margin-top: 3px;'><tr><td valign='top'></td></tr></table></td></tr>";
$the_title .= "<tr><td valign='top'><h3>".$current_module_strings['LBL_MODULE_SECTION_TITLE'].":</h3></td>\n";
$the_title .= "</tr></table>\n";
echo $the_title;
$button  = "<form  action='index.php' method='post' name='form' id='form'>\n";
$button .= "<input type='hidden' name='module' value='WorkFlowTriggerShells'>\n";
$button .= "<input type='hidden' name='workflow_id' value='$focus->id'>\n<input type='hidden' name='trigger_name' value='$focus->name'>\n";
$button .= "<input type='hidden' name='return_module' value='".$currentModule."'>\n";
$button .= "<input type='hidden' name='return_action' value='".$action."'>\n";
$button .= "<input type='hidden' name='return_id' value='".$focus->id."'>\n";
$button .= "<input type='hidden' name='action'>\n";

$frame_type = "Secondary";
if(empty($focus_triggers_list)){
	//echo "<BR><font color='red'><b>".$mod_strings['LBL_LACK_OF_TRIGGER_ALERT']."</b></font><BR>";
	$frame_type = "Primary";
}
/*
if(empty($focus_triggers_list)){
	
	$button .= "<input title='".$current_module_strings['LBL_NEW_TRIGGER_BUTTON_TITLE']."' accessKey='".$current_module_strings['LBL_NEW_TRIGGER_BUTTON_KEY']."' class='button' type='button' name='New' value='  ".$current_module_strings['LBL_NEW_TRIGGER_BUTTON_LABEL']."'";
	$button .= "LANGUAGE=javascript onclick='window.open(\"index.php?module=WorkFlowTriggerShells&action=CreateStep1&sugar_body_only=true&form=ComponentView&workflow_id=$focus->id\",\"new\",\"width=400,height=500,resizable=1,scrollbars=1\");'>";
	echo "<BR><font color='red'><b>".$mod_strings['LBL_LACK_OF_TRIGGER_ALERT']."</b></font><BR>";
}

	$button .= "&nbsp;&nbsp;<input title='".$current_module_strings['LBL_NEW_FILTER_BUTTON_TITLE']."' accessKey='".$current_module_strings['LBL_NEW_FILTER_BUTTON_KEY']."' class='button' type='button' name='New' value='  ".$current_module_strings['LBL_NEW_FILTER_BUTTON_LABEL']."'";
	$button .= "LANGUAGE=javascript onclick='window.open(\"index.php?module=WorkFlowTriggerShells&action=CreateStep1&sugar_body_only=true&form=ComponentView&workflow_id=$focus->id&frame_type=Secondary\",\"new\",\"width=400,height=500,resizable=1,scrollbars=1\");'>";
*/
$button .= "<input title='".$app_strings['LBL_NEW_BUTTON_TITLE']."' accessKey='".$app_strings['LBL_NEW_BUTTON_TITLE']."' class='button' type='button' name='New' value='  ".$app_strings['LBL_NEW_BUTTON_LABEL']."'";
$button .= "LANGUAGE=javascript onclick='window.open(\"index.php?module=WorkFlowTriggerShells&action=CreateStep1&sugar_body_only=true&form=ComponentView&workflow_id=$focus->id&frame_type=$frame_type\",\"new\",\"width=400,height=500,resizable=1,scrollbars=1\");'>";

$button .= "</form>\n";
$ListView = new ListView();
$header_text = '';
		
	$ListView->initNewXTemplate( 'modules/WorkFlowTriggerShells/SubPanelView.html',$current_module_strings);
$ListView->xTemplateAssign("WORKFLOW_ID", $focus->id);
$ListView->xTemplateAssign("RETURN_URL", "&return_module=".$currentModule."&return_action=DetailView&return_id={$_REQUEST['record']}");
$ListView->xTemplateAssign("EDIT_INLINE_PNG",  SugarThemeRegistry::current()->getImage('edit_inline','align="absmiddle" alt="'.$app_strings['LNK_EDIT'].'" border="0"'));
$ListView->xTemplateAssign("DELETE_INLINE_PNG",  SugarThemeRegistry::current()->getImage('delete_inline','align="absmiddle" alt="'.$app_strings['LNK_REMOVE'].'" border="0"'));
$ListView->setHeaderTitle($current_module_strings['LBL_MODULE_NAME'] . $header_text);
$ListView->setHeaderText($button);
$ListView->processListView($focus_all_triggers_list, "main", "TRIGGER");
?>
