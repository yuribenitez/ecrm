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

 * Description: Class defining queries of predefined charts.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/



class PredefinedChart{
	var $params = array();

	function PredefinedChart(){
	}

	function predefinedChartQuery($chart, $params=array()){
		switch($chart){
			case 'pipeline_by_sales_stage':
			case 'pipeline_by_sales_stage_funnel':
				return $this->pipelineBySalesStageQuery();
			case 'lead_source_by_outcome':
				return $this->leadSourceByOutcomeQuery($params);
			case 'outcome_by_month':
				return $this->outcomeByMonthQuery();
			case 'pipeline_by_lead_source':
				return $this->pipelineByLeadSourceQuery($params);
		    case 'my_modules_used_last_30_days':
		        return $this->myModuleUsageLast30Days();
            case 'my_team_modules_used_last_30_days':
				return $this->myTeamModuleUsageLast30Days();
			default:
				return $this->customChartQuery($chart);
		}
		return;
	}

	function pipelineBySalesStageQuery(){


		global $current_user;
		global $timedate;
		global $app_list_strings;

		//get the dates to display
		$user_date_start = $current_user->getPreference('pbss_date_start');

		if (!empty($user_date_start) && !isset($_REQUEST['pbss_date_start'])) {
			$date_start = $timedate->to_display_date($user_date_start, false);
			$GLOBALS['log']->debug("USER PREFERENCES['pbss_date_start'] is:");
			$GLOBALS['log']->debug($user_date_start);
		}
		elseif (isset($_REQUEST['pbss_date_start']) && $_REQUEST['pbss_date_start'] != '') {
			$date_start = $_REQUEST['pbss_date_start'];
			$ds = $timedate->to_db_date($date_start, false);
			$current_user->setPreference('pbss_date_start', $ds);
			$GLOBALS['log']->debug("_REQUEST['pbss_date_start'] is:");
			$GLOBALS['log']->debug($_REQUEST['pbss_date_start']);
			$GLOBALS['log']->debug("USER PREFERENCES['pbss_date_start'] is:");
			$GLOBALS['log']->debug($current_user->getPreference('pbss_date_start'));
		}
		else {
			$date_start = $timedate->nowDate();
		}

		$user_date_end = $current_user->getPreference('pbss_date_end');
		if (!empty($user_date_end) && !isset($_REQUEST['pbss_date_end'])) {
			$date_end = $timedate->to_display_date($user_date_end, false);
			$GLOBALS['log']->debug("USER PREFERENCES['pbss_date_end'] is:");
			$GLOBALS['log']->debug($user_date_end);
		}
		elseif (isset($_REQUEST['pbss_date_end']) && $_REQUEST['pbss_date_end'] != '') {
			$date_end = $_REQUEST['pbss_date_end'];
			$de = $timedate->to_db_date($date_end, false);
		    $current_user->setPreference('pbss_date_end', $de);
			$GLOBALS['log']->debug("_REQUEST['pbss_date_end'] is:");
			$GLOBALS['log']->debug($_REQUEST['pbss_date_end']);
			$GLOBALS['log']->debug("USER PREFERENCES['pbss_date_end'] is:");
			$GLOBALS['log']->debug( $current_user->getPreference('pbss_date_end'));
		}
		else {
			$date_end = $timedate->asUserDate($timedate->fromString("2010-01-01"));
			$GLOBALS['log']->debug("USER PREFERENCES['pbss_date_end'] not found. Using: ".$date_end);
		}

		$tempx = array();
		$datax = array();
		$datax_selected= array();
		$user_tempx = $current_user->getPreference('pbss_sales_stages');
		//get list of sales stage keys to display
		if (!empty($user_tempx) && count($user_tempx) > 0 && !isset($_REQUEST['pbss_sales_stages'])) {
			$tempx = $user_tempx ;
			$GLOBALS['log']->debug("USER PREFERENCES['pbss_sales_stages'] is:");
			$GLOBALS['log']->debug($user_tempx );
		}
		elseif (isset($_REQUEST['pbss_sales_stages']) && count($_REQUEST['pbss_sales_stages']) > 0) {
			$tempx = $_REQUEST['pbss_sales_stages'];
			$current_user->setPreference('pbss_sales_stages', $_REQUEST['pbss_sales_stages']);
			$GLOBALS['log']->debug("_REQUEST['pbss_sales_stages'] is:");
			$GLOBALS['log']->debug($_REQUEST['pbss_sales_stages']);
			$GLOBALS['log']->debug("USER PREFERENCES['pbss_sales_stages'] is:");
			$GLOBALS['log']->debug($current_user->getPreference('pbss_sales_stages'));
		}

		//set $datax using selected sales stage keys
		if (count($tempx) > 0) {
			foreach ($tempx as $key) {
				$datax[$key] = $app_list_strings['sales_stage_dom'][$key];
				array_push($datax_selected,$key);
			}
		}
		else {
			$datax = $app_list_strings['sales_stage_dom'];
			$datax_selected = array_keys($app_list_strings['sales_stage_dom']);
		}
		$GLOBALS['log']->debug("datax is:");
		$GLOBALS['log']->debug($datax);

		$ids = array();
		$new_ids = array();
		$user_ids = $current_user->getPreference('pbss_ids');
		//get list of user ids for which to display data
		if (!empty($user_ids) && count($user_ids) != 0 && !isset($_REQUEST['pbss_ids'])) {
			$ids = $user_ids;

			$GLOBALS['log']->debug("USER PREFERENCES['pbss_ids'] is:");
			$GLOBALS['log']->debug($user_ids);
		}
		elseif (isset($_REQUEST['pbss_ids']) && count($_REQUEST['pbss_ids']) > 0) {
			$ids = $_REQUEST['pbss_ids'];
			$current_user->setPreference('pbss_ids', $_REQUEST['pbss_ids']);
			$GLOBALS['log']->debug("_REQUEST['pbss_ids'] is:");
			$GLOBALS['log']->debug($_REQUEST['pbss_ids']);
			$GLOBALS['log']->debug("USER PREFERENCES['pbss_ids'] is:");
			$GLOBALS['log']->debug($current_user->getPreference('pbss_ids'));
		}
		else {
			$ids = get_user_array(false);
			$ids = array_keys($ids);

		}

		$user_id = $ids;
		$opp = new Opportunity;
		$where="";
		//build the where clause for the query that matches $user
		$count = count($user_id);
		$id = array();
		$user_list = get_user_array(false);
		foreach ($user_id as $key) {
			$new_ids[$key] = $user_list[$key];
		}
		if ($count>0) {
			foreach ($new_ids as $the_id=>$the_name) {
				$id[] = "'".$the_id."'";
			}
			$ids = join(",",$id);
			$where .= "opportunities.assigned_user_id IN ($ids) ";

		}
		//build the where clause for the query that matches $datax
		$count = count($datax);
		$dataxArr = array();
		if ($count>0) {

			foreach ($datax as $key=>$value) {
				$dataxArr[] = "'".$key."'";
			}
			$dataxArr = join(",",$dataxArr);
			$where .= "AND opportunities.sales_stage IN	($dataxArr) ";
		}

		$date_start = $timedate->swap_formats($date_start, $timedate->get_date_format(), $timedate->dbDayFormat);
		$date_end = $timedate->swap_formats($date_end, $timedate->get_date_format(), $timedate->dbDayFormat);
		//build the where clause for the query that matches $date_start and $date_end
		$where .= "	AND opportunities.date_closed >= ". db_convert("'".$date_start."'",'date'). "
					AND opportunities.date_closed <= ".db_convert("'".$date_end."'",'date') ;
		$where .= "	AND opportunities.assigned_user_id = users.id  AND opportunities.deleted=0 ";

		//Now do the db queries
		//query for opportunity data that matches $datax and $user
		$query = "	SELECT opportunities.sales_stage,
						users.user_name,
						opportunities.assigned_user_id,
						count( * ) AS opp_count,
						sum(amount_usdollar/1000) AS total
					FROM users,opportunities  ";
		$opp->add_team_security_where_clause($query);
		$query .= "WHERE " .$where;
		$query .= " GROUP BY opportunities.sales_stage";

		$additional_params = array( 'date_start' => $date_start, 'date_closed' => $date_end, );

		$this->params = $additional_params;

		return $query;
	}

	function leadSourceByOutcomeQuery($filters){


		global $current_user;
		global $app_list_strings;

		$tempx = array();
		$datax = array();
		$selected_datax = array();
		//get list of sales stage keys to display

		$tempx = $filters['lsbo_lead_sources'];
		if (!empty($lsbo_lead_sources) && count($lsbo_lead_sources) > 0 && !isset($_REQUEST['lsbo_lead_sources'])) {
			$GLOBALS['log']->fatal("user->getPreference('lsbo_lead_sources') is:");
			$GLOBALS['log']->fatal($tempx);
		}
		elseif (isset($_REQUEST['lsbo_lead_sources']) && count($_REQUEST['lsbo_lead_sources']) > 0) {
			$tempx = $_REQUEST['lsbo_lead_sources'];
			$current_user->setPreference('lsbo_lead_sources', $_REQUEST['lsbo_lead_sources']);
			$GLOBALS['log']->fatal("_REQUEST['lsbo_lead_sources'] is:");
			$GLOBALS['log']->fatal($_REQUEST['lsbo_lead_sources']);
			$GLOBALS['log']->fatal("user->getPreference('lsbo_lead_sources') is:");
			$GLOBALS['log']->fatal($current_user->getPreference('lsbo_lead_sources'));
		}
		//set $datax using selected sales stage keys
		if (!empty($tempx) && sizeof($tempx) > 0) {
			foreach ($tempx as $key) {
				$datax[$key] = $app_list_strings['lead_source_dom'][$key];
				array_push($selected_datax,$key);
			}
		}
		else {
			$datax = $app_list_strings['lead_source_dom'];
			$selected_datax = array_keys($app_list_strings['lead_source_dom']);
		}

		$datay = $datax;

		$ids = $filters['lsbo_ids'];
		//get list of user ids for which to display data
		if (!empty($ids) && count($ids) != 0 && !isset($_REQUEST['lsbo_ids'])) {
			$GLOBALS['log']->debug("_SESSION['lsbo_ids'] is:");
			$GLOBALS['log']->debug($ids);
		}
		elseif (isset($_REQUEST['lsbo_ids']) && count($_REQUEST['lsbo_ids']) > 0) {
			$ids = $_REQUEST['lsbo_ids'];
			$current_user->setPreference('lsbo_ids', $_REQUEST['lsbo_ids']);
			$GLOBALS['log']->debug("_REQUEST['lsbo_ids'] is:");
			$GLOBALS['log']->debug($_REQUEST['lsbo_ids']);
			$GLOBALS['log']->debug("user->getPreference('lsbo_ids') is:");
			$GLOBALS['log']->debug($current_user->getPreference('lsbo_ids'));
		}
		else {
			$ids = get_user_array(false);
			$ids = array_keys($ids);
		}

		$user_id = $ids;

		$opp = new Opportunity();
		$where="";
		//build the where clause for the query that matches $user
		$count = count($user_id);
		$id = array();
		if ($count>0) {
			foreach ($user_id as $the_id) {
				$id[] = "'".$the_id."'";
			}
			$ids = join(",",$id);
			$where .= "opportunities.assigned_user_id IN ($ids) ";

		}

		//build the where clause for the query that matches $datay
		$count = count($datay);
		$datayArr = array();
		if ($count>0) {

			foreach ($datay as $key=>$value) {
				$datayArr[] = "'".$key."'";
			}
			$datayArr = join(",",$datayArr);
			$where .= "AND opportunities.lead_source IN	($datayArr) ";
		}
		$query = "SELECT lead_source,sales_stage,sum(amount_usdollar/1000) as total,count(*) as opp_count FROM opportunities ";
		$opp->add_team_security_where_clause($query);
		$query .= "WHERE " .$where." AND opportunities.deleted=0 ";
		$query .= " GROUP BY sales_stage,lead_source ORDER BY lead_source,sales_stage";

		return $query;
	}

	function outcomeByMonthQuery(){


		global $current_user;
		global $timedate;

		$user_date_start = $current_user->getPreference('obm_date_start');
		if (!empty($user_date_start)  && !isset($_REQUEST['obm_date_start'])) {
			$date_start =$user_date_start;
			$GLOBALS['log']->debug("USER PREFERENCES['obm_date_start'] is:");
			$GLOBALS['log']->debug($user_date_start);
		}
		elseif (isset($_REQUEST['obm_year']) && $_REQUEST['obm_year'] != '') {
			$date_start = $_REQUEST['obm_year'].'-01-01';
			$current_user->setPreference('obm_date_start', $date_start);
			$GLOBALS['log']->debug("_REQUEST['obm_date_start'] is:");
			$GLOBALS['log']->debug($_REQUEST['obm_date_start']);
			$GLOBALS['log']->debug("_SESSION['obm_date_start'] is:");
			$GLOBALS['log']->debug($current_user->getPreference('obm_date_start'));
		}
		else {
			$date_start = date('Y').'-01-01';
		}
		$user_date_end = $current_user->getPreference('obm_date_end');
		if (!empty($user_date_end) && !isset($_REQUEST['obm_date_end'])) {
			$date_end =$user_date_end;
			$GLOBALS['log']->debug("USER PREFERENCES['obm_date_end'] is:");
			$GLOBALS['log']->debug($date_end);
		}
		elseif (isset($_REQUEST['obm_year']) && $_REQUEST['obm_year'] != '') {
			$date_end = $_REQUEST['obm_year'].'-12-31';
			$current_user->setPreference('obm_date_end', $date_end );
			$GLOBALS['log']->debug("_REQUEST['obm_date_end'] is:");
			$GLOBALS['log']->debug($_REQUEST['obm_date_end']);
			$GLOBALS['log']->debug("USER PREFERENCES['obm_date_end'] is:");
			$GLOBALS['log']->debug($current_user->getPreference('obm_date_end'));
		}
		else {
			$date_end = date('Y').'-12-31';
		}

		$ids = array();
		//get list of user ids for which to display data
		$user_ids = $current_user->getPreference('obm_ids');
		if (!empty($user_ids) && count($user_ids) != 0 && !isset($_REQUEST['obm_ids'])) {
			$ids = $user_ids;
			$GLOBALS['log']->debug("USER PREFERENCES['obm_ids'] is:");
			$GLOBALS['log']->debug($user_ids);
		}
		elseif (isset($_REQUEST['obm_ids']) && count($_REQUEST['obm_ids']) > 0) {
			$ids = $_REQUEST['obm_ids'];
			$current_user->setPreference('obm_ids', $_REQUEST['obm_ids']);
			$GLOBALS['log']->debug("_REQUEST['obm_ids'] is:");
			$GLOBALS['log']->debug($_REQUEST['obm_ids']);
			$GLOBALS['log']->debug("USER PREFRENCES['obm_ids'] is:");
			$GLOBALS['log']->debug($current_user->getPreference('obm_ids'));
		}
		else {
			$ids = get_user_array(false);
			$ids = array_keys($ids);
		}

		$user_id = $ids;

		$where = "";
		//build the where clause for the query that matches $user
		$count = count($user_id);
		$id = array();
		if ($count>0) {
			foreach ($user_id as $the_id) {
				$id[] = "'".$the_id."'";
			}
			$ids = join(",",$id);
			$where .= "opportunities.assigned_user_id IN ($ids) ";

		}

		// cn: adding user-pref date handling
		$dateStartDisplay = $timedate->asUserDate($timedate->fromString($date_start));
		$dateEndDisplay = $timedate->asUserDate($timedate->fromString($date_end));

		$opp = new Opportunity();
		//build the where clause for the query that matches $date_start and $date_end
		$where .= "AND opportunities.date_closed >= ".db_convert("'".$date_start."'",'date')." AND opportunities.date_closed <= ".db_convert("'".$date_end."'",'date')." AND opportunities.deleted=0";
		$query = "SELECT sales_stage,".db_convert('opportunities.date_closed','date_format',array("'%Y-%m'"),array("'YYYY-MM'"))." as m, sum(amount_usdollar/1000) as total, count(*) as opp_count FROM opportunities ";
		$opp->add_team_security_where_clause($query);
		$query .= "WHERE ".$where;
		$query .= " GROUP BY sales_stage,".db_convert('opportunities.date_closed','date_format',array("'%Y-%m'"),array("'YYYY-MM'"))."ORDER BY m";
		return $query;
	}

	function pipelineByLeadSourceQuery($filters){


		global $current_user;
		global $app_list_strings;

		$tempx = array();
		$datax = array();
		$selected_datax = array();

		//get list of sales stage keys to display
		$user_tempx = $filters['pbls_lead_sources'];
		if (!empty($user_tempx) && count($user_tempx) > 0 && !isset($_REQUEST['pbls_lead_sources'])) {
			$tempx = $user_tempx;
			$GLOBALS['log']->debug("USER PREFERENCES['pbls_lead_sources'] is:");
			$GLOBALS['log']->debug($user_tempx);
		}
		elseif (isset($_REQUEST['pbls_lead_sources']) && count($_REQUEST['pbls_lead_sources']) > 0) {
			$tempx = $_REQUEST['pbls_lead_sources'];
			$current_user->setPreference('pbls_lead_sources', $_REQUEST['pbls_lead_sources']);
			$GLOBALS['log']->debug("_REQUEST['pbls_lead_sources'] is:");
			$GLOBALS['log']->debug($_REQUEST['pbls_lead_sources']);
			$GLOBALS['log']->debug("USER PREFERENCES['pbls_lead_sources'] is:");
			$GLOBALS['log']->debug($current_user->getPreference('pbls_lead_sources'));
		}

		//set $datax using selected sales stage keys
		if (count($tempx) > 0) {
			foreach ($tempx as $key) {
				$datax[$key] = $app_list_strings['lead_source_dom'][$key];
				array_push($selected_datax,$key);
			}
		}
		else {
			$datax = $app_list_strings['lead_source_dom'];
			$selected_datax = array_keys($app_list_strings['lead_source_dom']);
		}

		$legends = $datax;

		$ids = array();
		$user_ids = $filters['pbls_ids'];
		//get list of user ids for which to display data
		if (!empty($user_ids) && count($user_ids) > 0){
			$ids = $user_ids;
		}
		else {
			$ids = get_user_array(false);
			$ids = array_keys($ids);
		}

		$user_id = $ids;
		$opp = new Opportunity;
		//Now do the db queries
		//query for opportunity data that matches $legends and $user
		$where="";
		//build the where clause for the query that matches $user

		$count = count($user_id);
		$id = array();
		if ($count > 0 && !empty($user_id)) {
			foreach ($user_id as $the_id) {
				$id[] = "'".$the_id."'";
			}
			$ids = join(",",$id);
			$where .= "opportunities.assigned_user_id IN ($ids) ";

		}
		if(!empty($where)) $where .= 'AND';
		//build the where clause for the query that matches $datax
		$count = count($legends);
		$legendItem = array();
		if ($count > 0 && !empty($legends)) {

			foreach ($legends as $key=>$value) {
				$legendItem[] = "'".$key."'";
			}
			$legendItems = join(",",$legendItem);
			$where .= " opportunities.lead_source IN	($legendItems) ";
		}
		$query = "SELECT lead_source,sum(amount_usdollar/1000) as total,count(*) as opp_count FROM opportunities ";
		$opp->add_team_security_where_clause($query);
		$query .= "WHERE ".$where." AND opportunities.deleted=0 ";
		$query .= "GROUP BY lead_source ORDER BY total DESC";

		return $query;
	}

	function myModuleUsageLast30Days() {
		global $current_user;
		$dateValue = db_convert("'".$timedate->getNow()->modify("-30 days")->asDb()."'" ,"datetime");

        $query  = "SELECT tracker.module_name as module_name ";
        $query .= ",COUNT(*) count FROM tracker ";
        $query .= "WHERE tracker.user_id = '$current_user->id' AND tracker.module_name != 'UserPreferences' AND tracker.date_modified > $dateValue ";
        $query .= "GROUP BY tracker.module_name ORDER BY count DESC";

		return $query;
	}

	function myTeamModuleUsageLast30Days() {
        global $timedate;
		$dateValue = db_convert("'".$timedate->getNow()->modify("-30 days")->asDb()."'" ,"datetime");
        global $current_user;
	    $query =  "SELECT l1.user_name, tracker.module_name, count(*) count ";
	    $query .= "FROM tracker INNER JOIN users l1 ON l1.id = tracker.user_id and l1.deleted = 0 ";
	    $query .= "WHERE tracker.deleted = 0 AND tracker.module_name != 'UserPreferences' AND tracker.date_modified > $dateValue ";
	    $query .= "AND tracker.user_id in (Select id from users where reports_to_id = '$current_user->id') ";
	    $query .= "GROUP BY l1.user_name, tracker.module_name ";
	    $query .= "ORDER BY l1.user_name ASC";
        return $query;
	}

	// This function will grab a query from the custom directory to be used for charting
	function customChartQuery($chart){
		if (file_exists('custom/Charts/' . $chart . '.php')){
			require_once('custom/Charts/' . $chart . '.php');
			return customChartQuery();
		}
		else return false;
	}
}


?>