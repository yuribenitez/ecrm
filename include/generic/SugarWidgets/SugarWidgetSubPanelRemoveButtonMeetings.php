<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
   ********************************************************************************/




require_once('include/generic/SugarWidgets/SugarWidgetField.php');

class SugarWidgetSubPanelRemoveButtonMeetings extends SugarWidgetField
{
	function displayHeaderCell(&$layout_def)
	{
		return '&nbsp;';
	}

	function displayList(&$layout_def)
	{
		global $app_strings;
		
				
		$parent_record_id = $_REQUEST['record'];
		$parent_module = $_REQUEST['module'];

		$action = 'DeleteRelationship';
		$record = $layout_def['fields']['ID'];

		$return_module = $_REQUEST['module'];
		$return_action = 'SubPanelViewer';
		$subpanel = $layout_def['subpanel_id'];
		$return_id = $_REQUEST['record'];
		
		
		if(isset($GLOBALS['FOCUS'])) {	
			$focus = $GLOBALS['FOCUS'];
		}
		
        /* Handle case where we generate subpanels from MySettings/LoadTabSubpanels.php */
        else if($return_module == 'MySettings') {
        	global $beanList, $beanFiles;
            $return_module = $_REQUEST['loadModule'];
            
            $class = $beanList[$return_module];
            require_once($beanFiles[$class]);
            $focus = new $class();
            $focus->retrieve($return_id);
        }
		
        //CCL - Comment out restriction to not remove assigned user
		//if($focus->assigned_user_id == $record) return '';
		
		if (isset($layout_def['linked_field_set']) && !empty($layout_def['linked_field_set'])) {
			$linked_field= $layout_def['linked_field_set'] ;
		} else {
			$linked_field = $layout_def['linked_field'];
		}
		$refresh_page = 0;
		if(!empty($layout_def['refresh_page'])){
			$refresh_page = 1;
		}
		$return_url = "index.php?module=$return_module&action=$return_action&subpanel=$subpanel&record=$return_id&sugar_body_only=1";

		$icon_remove_text = $app_strings['LNK_REMOVE'];
		$icon_remove_html = SugarThemeRegistry::current()->getImage( 'delete_inline',
			'align="absmiddle" alt="' . $icon_remove_text . '" border="0"');
		$remove_url = $layout_def['start_link_wrapper']
			. "index.php?module=$parent_module"
			. "&action=$action"
			. "&record=$parent_record_id"
			. "&linked_field=$linked_field"
			. "&linked_id=$record"
			. "&return_url=" . urlencode(urlencode($return_url))
			. "&refresh_page=$refresh_page"
			. $layout_def['end_link_wrapper'];
		$remove_confirmation_text = $app_strings['NTC_REMOVE_CONFIRMATION'];
		//based on listview since that lets you select records
		if($layout_def['ListView']) {
            return "<a href=\"javascript:sub_p_rem('$subpanel', '$linked_field'" 
                    .", '$record', $refresh_page);\"" 
			. ' class="listViewTdToolsS1"'
			. " onclick=\"return sp_rem_conf();\""
			. ">$icon_remove_html&nbsp;$icon_remove_text</a>";
		}else{
			return '';
		}
	}
}
?>
