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



$subpanel_layout = array(
	'where'				=> "",


	'fill_in_additional_fields'	=> true,
	'list_fields' => array(
		'object_image'=>array(
			'widget_class'			=> 'SubPanelIcon',
 		 	'width'					=> '2%',
		),
		'name' => array(
			 'vname'				=> 'LBL_LIST_SUBJECT',
			 'widget_class'			=> 'SubPanelDetailViewLink',
			 'width'				=> '30%',
             'parent_info'          => true
		),
		'status' => array(
			 'vname'				=> 'LBL_LIST_STATUS',
			 'width'				=> '15%',
		),
		'reply_to_status' => array(
			 'usage'				=> 'query_only',
             'force_exists'			=> true,
			 'force_default'		=> 0,
		),
		'contact_name'=>array(
             'widget_class'         => 'SubPanelDetailViewLink',
             'target_record_key'    => 'contact_id',
             'target_module'        => 'Contacts',
             'module'               => 'Contacts',
             'vname'                => 'LBL_LIST_CONTACT',
             'width'                => '11%',
             'sortable'             => false,
             'force_exists'			=> true,
        ),
        'contact_id'=>array(
            'usage'=>'query_only',
    		'force_exists'=>true
        ),
        'contact_name_owner'=>array(
            'usage'=>'query_only',
            'force_exists'=>true
        ),
        'contact_name_mod'=>array(
            'usage'=>'query_only',
            'force_exists'=>true
        ),
		'parent_id'=>array(
            'usage'=>'query_only',
			'force_exists'=>true
        ),
		'parent_type'=>array(
            'usage'=>'query_only',
			'force_exists'=>true
        ),
		'date_modified' => array(
			'width'					=> '10%',
		),
		'date_entered'=>array(
			'vname' => 'LBL_LIST_DATE_ENTERED',
			'width' => '10%',
		),
		'assigned_user_name' => array (
			'name' => 'assigned_user_name',
			'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
		 	'target_record_key' => 'assigned_user_id',
			'target_module' => 'Employees',
			'width' => '10%',			
		),
		'edit_button' => array(
			'vname' => 'LBL_EDIT_BUTTON',
			'widget_class'			=> 'SubPanelEditButton',
			 'width'				=> '2%',
		),
		'remove_button' => array(
			'vname' => 'LBL_REMOVE',
			 'widget_class'			=> 'SubPanelRemoveButton',
			 'width'				=> '2%',
		),
		'filename' => array(
			'usage'					=> 'query_only',
			'force_exists'			=> true
		),
	), // end list_fields
);
?>
