<?php
 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/vCard.php');

if(isset($_SESSION['authenticated_user_language']) && $_SESSION['authenticated_user_language'] != ''){
	$current_language = $_SESSION['authenticated_user_language'];
}
else{
	$current_language = $sugar_config['default_language'];
}

//set module and application string arrays based upon selected language
$app_strings = return_application_language($current_language);
$app_list_strings = return_app_list_strings_language($current_language);

$vcard = new vCard();
$module = 'Contacts';
if(isset($_REQUEST['module']))
	$module = clean_string($_REQUEST['module']);

$vcard->loadContact($_REQUEST['contact_id'], $module);

$vcard->saveVCard();

?>
