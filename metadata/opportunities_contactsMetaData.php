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

$dictionary['opportunities_contacts'] = array ( 'table' => 'opportunities_contacts'
                                  , 'fields' => array (
       array('name' =>'id', 'type' =>'varchar', 'len'=>'36')
      , array('name' =>'contact_id', 'type' =>'varchar', 'len'=>'36', )
      , array('name' =>'opportunity_id', 'type' =>'varchar', 'len'=>'36',)
      , array('name' =>'contact_role', 'type' =>'varchar', 'len'=>'50')
      , array ('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false)
                                                      )                                  , 'indices' => array (
       array('name' =>'opportunities_contactspk', 'type' =>'primary', 'fields'=>array('id'))
      , array('name' =>'idx_con_opp_con', 'type' =>'index', 'fields'=>array('contact_id'))
      , array('name' =>'idx_con_opp_opp', 'type' =>'index', 'fields'=>array('opportunity_id'))
      , array('name' => 'idx_opportunities_contacts', 'type'=>'alternate_key', 'fields'=>array('opportunity_id','contact_id'))
      
      
                                                      )
 
  	  , 'relationships' => array ('opportunities_contacts' => array('lhs_module'=> 'Opportunities', 'lhs_table'=> 'opportunities', 'lhs_key' => 'id',
							  'rhs_module'=> 'Contacts', 'rhs_table'=> 'contacts', 'rhs_key' => 'id',
							  'relationship_type'=>'many-to-many',
							  'join_table'=> 'opportunities_contacts', 'join_key_lhs'=>'opportunity_id', 'join_key_rhs'=>'contact_id',
							  ))
 
 )
 
 
 
?>
