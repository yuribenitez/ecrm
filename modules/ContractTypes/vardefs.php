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

$dictionary['ContractType'] = array('table' => 'contract_types',
	'comment' => 'Specifies the types of contracts available',

'fields' => array (
    'id' => array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required'=>true,
        'reportable'=>false,
        'comment' => 'Unique idenifier'
    ),

   'name' => array (
        'name' => 'name',
        'vname' => 'LBL_TYPE_NAME',
        'type' => 'varchar',
        'len' => '30',
        'comment' => 'Contract type name',
        'importable' => 'required',
   ),
	'list_order' => array (
		'name' => 'list_order',
    	'vname' => 'LBL_LIST_ORDER',
    	'type' => 'int',
    	'len' => '4',
    	'comment' => 'Relative order in drop down list',
    	'importable' => 'required',
  	),
    'date_entered' => array (
    	'name' => 'date_entered',
        'vname' => 'LBL_DATE_ENTERED',
        'type' => 'datetime',
		'required' => true,
		'comment' => 'Date record created'
  	),
  	'date_modified' => array (
    	'name' => 'date_modified',
    	'vname' => 'LBL_DATE_MODIFIED',
    	'type' => 'datetime',
    	'required' => true,
    	'comment' => 'Date record last modified'
  	),
    'modified_user_id' => array (
    	'name' => 'modified_user_id',
    	'vname' => 'LBL_MODIFIED_USER_ID',
    	'dbType' => 'id',
    	'type'=>'id',
    	'comment' => 'Date record last modified'
  	),
  	'created_by' => array (
    	'name' => 'created_by',
    	'vname' => 'LBL_CREATED_BY',
    	'isnull' => 'false',
    	'dbType' => 'id',
    	'type'=>'id',
    	'comment' => 'User ID who created record'
  	),
  	'deleted' => array (
    	'name' => 'deleted',
    	'vname' => 'LBL_DELETED',
    	'type' => 'bool',
    	'required' => false,
    	'default' => '0',
    	'reportable'=>false,
    	'comment' => 'Record deletion indicator'
  	),
  	'documents' => array (
  		'name' => 'documents',
    	'type' => 'link',
    	'relationship' => 'contracttype_documents',
    	'source'=>'non-db',
		'vname'=>'LBL_DOCUMENTS',
  	),
  ),
'indices' => array (
      array('name' =>'contract_types_pk', 'type' =>'primary', 'fields'=>array('id')),
 )
);
?>