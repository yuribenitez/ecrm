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

require_once('modules/SugarFeed/feedLogicBase.php');


class LeadFeed extends FeedLogicBase {
    var $module = 'Leads';
    function pushFeed($bean, $event, $arguments){
        global $locale;

        $text = '';
        if(empty($bean->fetched_row)){
            $full_name = $locale->getLocaleFormattedName($bean->first_name, $bean->last_name, '');

            $text =  '{SugarFeed.CREATED_LEAD} [' . $bean->module_dir . ':' . $bean->id . ':' . $full_name . ']';
        }else{
            if(!empty($bean->fetched_row['status'] ) && $bean->fetched_row['status'] != $bean->status && $bean->status == 'Converted'){
                // Repeated here so we don't format the name on "uninteresting" events
                $full_name = $locale->getLocaleFormattedName($bean->first_name, $bean->last_name, '');

                $text =  '{SugarFeed.CONVERTED_LEAD} [' . $bean->module_dir . ':' . $bean->id . ':' . $full_name . ']';
            }
        }
		
        if(!empty($text)){ 
        	SugarFeed::pushFeed2($text, $bean);
        }
		
    }
}
?>
