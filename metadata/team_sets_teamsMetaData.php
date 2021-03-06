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

$dictionary['team_sets_teams'] = array ( 'table' => 'team_sets_teams'
                                  , 'fields' => array (
    	'id' => array(
			'name'		=> 'id',
			'vname'		=> 'LBL_ID',
			'type'		=> 'id',
			'required'	=> true,
		),
       array('name' =>'team_set_id', 'type' =>'id')
      , array('name' =>'team_id', 'type' =>'id')
      , array ('name' => 'date_modified','type' => 'datetime')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'', 'default'=>'0')
                                                      ) 
                                 , 'indices' => array (
       array('name' =>'idx_ud_id', 'type' =>'primary', 'fields'=>array('id')),
       array('name' =>'idx_ud_set_id', 'type' =>'index', 'fields'=>array('team_set_id', 'team_id')),
       array('name' =>'idx_ud_team_id', 'type' =>'index', 'fields'=>array('team_id')),
       array('name' =>'idx_ud_team_set_id', 'type' =>'index', 'fields'=>array('team_set_id')),                                   
                                                      ),
       'relationships' => array ('team_sets_teams' => array('lhs_module'=> 'TeamSets', 'lhs_table'=> 'team_sets', 'lhs_key' => 'id',
							  'rhs_module'=> 'Teams', 'rhs_table'=> 'teams', 'rhs_key' => 'id',
							  'relationship_type'=>'many-to-many',
							  'join_table'=> 'team_sets_teams', 'join_key_lhs'=>'team_set_id', 'join_key_rhs'=>'team_id'))
                                  )
?>
