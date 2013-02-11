<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



global $mod_strings;
global $current_user;


if (!is_admin($current_user)&& !is_admin_for_module($GLOBALS['current_user'],'Users')) sugar_die("Unauthorized access to administration.");

$focus = new Team();

if(!isset($_REQUEST['record']) || !isset($_REQUEST['user_id'])) {
	sugar_die($mod_strings['ERR_ADD_RECORD']);
}
else {
	$record = $_REQUEST['record'];
	$user_id = $_REQUEST['user_id'];
	if(is_array($record)){
		foreach($record as $id){
			$focus->retrieve($id);
			$focus->add_user_to_team($user_id);
		}
	}
	else{
		$focus->retrieve($record);
		$focus->add_user_to_team($user_id);
	}
}
header("Location: index.php?module={$_REQUEST['return_module']}&action={$_REQUEST['return_action']}&record={$_REQUEST['return_id']}");
?>
