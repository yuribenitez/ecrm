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

 * Description:  Contains field arrays that are used for caching
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$fields_array['Relationship'] = array ('column_fields' => Array(
		'id',
		'relationship_name',
		'lhs_module',
		'lhs_table',
		'lhs_key',
		'rhs_module',
		'rhs_table',
		'rhs_key',
		'join_table',
		'join_key_lhs',
		'join_key_rhs',
		'relationship_type',
		'relationship_role_column',
		'relationship_role_column_value',
		'reverse',
	),
        'list_fields' =>  Array(
		'id',
		'relationship_name',
		'lhs_module',
		'lhs_table',
		'lhs_key',
		'rhs_module',
		'rhs_table',
		'rhs_key',
		'join_table',
		'join_key_lhs',
		'join_key_rhs',
		'relationship_type',
		'relationship_role_column',
		'relationship_role_column_value',
		'reverse',
	),
    'required_fields' =>   array("relationship_name"=>1),
);
?>