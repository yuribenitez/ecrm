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

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$viewdefs = array (
  'Contacts' => 
  array (
    'QuickCreate' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
            '{if !empty($smarty.request.contact_id)}<input type="hidden" name="reports_to_id" value="{$smarty.request.contact_id}">{/if}',
            '{if !empty($smarty.request.contact_name)}<input type="hidden" name="report_to_name" value="{$smarty.request.contact_name}">{/if}',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          array (
            'label' => '10',
            'field' => '30',
          ),
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'default' => 
        array (

          array (

            array (
              'name' => 'first_name',
            ),

            array (
              'name' => 'account_name',
            ),
          ),

          array (

            array (
              'name' => 'last_name',
              'displayParams'=>array('required'=>true),
            ),

            array (
              'name' => 'phone_work',
            ),
          ),

          array (

            array (
              'name' => 'title',
            ),

            array (
              'name' => 'phone_mobile',
            ),
          ),

          array (

            array (
              'name' => 'phone_fax',
            ),

            array (
              'name' => 'do_not_call',
            ),
          ),

          array (
            array (
              'name' => 'email1',
            ),
            array (
              'name' => 'lead_source',
            ),
          ),

          array (

            array (
              'name' => 'assigned_user_name',
            ),
            array (
              'name' => 'team_name',
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
