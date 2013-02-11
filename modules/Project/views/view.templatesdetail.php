<?php

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


require_once('include/MVC/View/views/view.detail.php');

class ProjectViewTemplatesDetail extends ViewDetail 
{
 	/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   $this->_getModuleTitleListParam($browserTitle),
    	   "<a href='index.php?module=Project&action=EditView&record={$this->bean->id}'>{$this->bean->name}</a>",
    	   $mod_strings['LBL_PROJECT_TEMPLATE']
    	   );
    }
    
	function display() 
	{
 		global $beanFiles;
		require_once($beanFiles['Project']);

		$focus = new Project();
		$focus->retrieve($_REQUEST['record']);

		global $app_list_strings, $current_user, $mod_strings;
		$this->ss->assign('APP_LIST_STRINGS', $app_list_strings);

		if($current_user->id == $focus->assigned_user_id || $current_user->is_admin){
			$this->ss->assign('OWNER_ONLY', true);
		}
		else{
			$this->ss->assign('OWNER_ONLY', false);
		}
		if(ACLController::checkAccess('ProjectTask', 'edit', true)) {
			$this->ss->assign('EDIT_RIGHTS_ONLY', true);
		}
		else{
			$this->ss->assign('EDIT_RIGHTS_ONLY', false);
		}

		$this->ss->assign('SAVE_AS', $mod_strings['LBL_SAVE_AS_PROJECT']);
		$this->ss->assign("IS_TEMPLATE", 1);
 		parent::display();
 	}

 	/**
     * @see SugarView::_displaySubPanels()
     */
    protected function _displaySubPanels()
    {
    	require_once ('include/SubPanel/SubPanelTiles.php');
   	 	$subpanel = new SubPanelTiles( $this->bean, 'ProjectTemplates' );
    	echo $subpanel->display( true, true );
    }

}
