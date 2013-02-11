<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
   ********************************************************************************/




require_once('include/generic/SugarWidgets/SugarWidgetField.php');
//this widget is used only by the document subpanel under contracts.
class SugarWidgetSubPanelLoadSignedButton extends SugarWidgetField
{
	function displayHeaderCell(&$layout_def)
	{
		return '&nbsp;';
	}

	function displayList(&$layout_def)
	{
		global $app_strings;
		

		$href = 'index.php?module=' . 'Documents'
			. '&action=' . 'EditView'
			. '&record=' . $layout_def['fields']['ID']
			. '&return_module=' . $_REQUEST['module']
			. '&return_action=' . 'DetailView'
			. '&return_id=' . $_REQUEST['record']
			. '&load_signed_id=' . $layout_def['fields']['LINKED_ID']
			. '&parent_id=' . $_REQUEST['record']			
			. '&parent_name=' . $layout_def['fields']['CONTRACT_NAME']			
			. '&parent_type=' . $_REQUEST['module']			
			. '&selected_revision_id=' . $layout_def['fields']['SELECTED_REVISION_ID']	
			;

		$edit_icon_html = SugarThemeRegistry::current()->getImage( 'loadSignedDocument',
			'align="absmiddle" alt="' . $app_strings['LNK_LOAD_SIGNED'] . '" border="0"');
		//if the contract state is executed or document is not a template hide this action.
		if ((!empty($layout_def['fields']['CONTRACT_STATUS']) && $layout_def['fields']['CONTRACT_STATUS']=='executed') or
			empty($layout_def['fields']['IS_TEMPLATE']) or $layout_def['fields']['IS_TEMPLATE']==0) {
			return "";
		}
		return '<a href="' . $href . '"' . "title ='". $app_strings['LNK_LOAD_SIGNED_TOOLTIP']."'"
			. 'class="listViewTdToolsS1">' . $edit_icon_html . '&nbsp;' . $app_strings['LNK_LOAD_SIGNED'] .'</a>&nbsp;';
	}
		
}
?>
