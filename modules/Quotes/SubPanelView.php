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





global $app_strings;
//we don't want the parent module's string file, but rather the string file specifc to this subpanel
global $current_language;
$current_module_strings = return_module_language($current_language, 'Quotes');

global $currentModule;

global $theme;
global $focus;
global $action;

// focus_list is the means of passing data to a SubPanelView.
global $focus_list;

$button  = "<form action='index.php' method='post' name='form' id='form'>\n";
$button .= "<input type='hidden' name='module' value='Quotes'>\n";
if ($currentModule == 'Accounts') {
	$button .= "<input type='hidden' name='account_id' value='$focus->id'>\n";
	$button .= "<input type='hidden' name='account_name' value=\"$focus->name\">\n";
}
elseif ($currentModule == 'Contacts') {
	$button .= "<input type='hidden' name='account_id' value='$focus->account_id'>\n";
	$button .= "<input type='hidden' name='account_name' value=\"$focus->account_name\">\n";
	$button .= "<input type='hidden' name='contact_id' value='$focus->id'>\n";
}
elseif ($currentModule == 'Opportunities') {
	$button .= "<input type='hidden' name='account_id' value='$focus->account_id'>\n";
	$button .= "<input type='hidden' name='account_name' value=\"$focus->account_name\">\n";
	$button .= "<input type='hidden' name='opportunity_id' value='$focus->id'>\n";
	$button .= "<input type='hidden' name='opportunity_name' value=\"$focus->name\">\n";
	$button .= "<input type='hidden' name='date_quote_expected_closed' value=\"$focus->date_closed\">\n";
}

$button .= "<input type='hidden' name='return_module' value='".$currentModule."'>\n";
$button .= "<input type='hidden' name='return_action' value='".$action."'>\n";
$button .= "<input type='hidden' name='return_id' value='".$focus->id."'>\n";
$button .= "<input type='hidden' name='action'>\n";

$button .= "<input title='".$app_strings['LBL_NEW_BUTTON_TITLE']."' accessyKey='".$app_strings['LBL_NEW_BUTTON_KEY']."' class='button' onclick=\"this.form.action.value='EditView'\" type='submit' name='New' value='  ".$app_strings['LBL_NEW_BUTTON_LABEL']."  '>\n";
if ($currentModule == 'Opportunities')
{
	///////////////////////////////////////
	///
	/// SETUP PARENT POPUP
	
	$popup_request_data = array(
		'call_back_function' => 'set_return_and_save',
		'form_name' => 'DetailView',
		'field_to_name_array' => array(
			'id' => 'quote_id',
			),
		);
	
	$json = getJSONobj();
	$encoded_popup_request_data = $json->encode($popup_request_data);
	
	//
	///////////////////////////////////////
	
	$button .= "<input title='".$app_strings['LBL_SELECT_BUTTON_TITLE']
		."' accessyKey='".$app_strings['LBL_SELECT_BUTTON_KEY']
		."' type='button' class='button' value='  ".$app_strings['LBL_SELECT_BUTTON_LABEL']
		."' name='button' onclick='open_popup(\"Quotes\", 600, 400, \"\", false, true, {$encoded_popup_request_data});'>\n";
//		."  ' name='button' onclick='window.open(\"index.php?module=Quotes&action=Popup&html=Popup_picker&form=DetailView&form_submit=true\",\"new\",\"width=600,height=400,resizable=1,scrollbars=1\");'>\n";
}
else if($currentModule != 'Accounts' && $currentModule != 'Contacts')
$button .= "<input title='".$app_strings['LBL_SELECT_BUTTON_TITLE']."' accessyKey='".$app_strings['LBL_SELECT_BUTTON_KEY']."' type='button' class='button' value='  ".$app_strings['LBL_SELECT_BUTTON_LABEL']."  ' name='button' LANGUAGE=javascript onclick='window.open(\"index.php?module=Quotes&action=Popup&html=Popup_picker&form=ContactDetailView&form_submit=true\",\"new\",\"width=600,height=400,resizable=1,scrollbars=1\");'>\n";

$button .= "</form>\n";

$ListView = new ListView();
$ListView->initNewXTemplate( 'modules/Quotes/SubPanelView.html',$current_module_strings);
$ListView->xTemplateAssign("EDIT_INLINE_PNG",  SugarThemeRegistry::current()->getImage('edit_inline','align="absmiddle" alt="'.$app_strings['LNK_EDIT'].'" border="0"'));
$ListView->xTemplateAssign("RETURN_URL", "&return_module=".$currentModule."&return_action=DetailView&return_id=".$focus->id);
$ListView->setHeaderTitle($current_module_strings['LBL_MODULE_NAME'] );
$ListView->setHeaderText($button);
$ListView->processListView($focus_list, "main", "QUOTE");

?>
