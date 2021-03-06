<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

//////////////////////////////////////////////
// TEMPLATE:
// 
//////////////////////////////////////////////
global $report_modules;
function template_reports_request_vars_js(&$smarty, &$reporter,&$args) {
	$field_defs = $reporter->focus->field_defs;

	$table_columns = array();
	$hidden_columns = array();


	if (!isset($reporter->report_def['report_type'])) {
		$report_type = 'tabular';
	} else {
		$report_type = $reporter->report_def['report_type'];
	} // else
	$allowed_modules_arr = array();
	global $report_modules;
	foreach($report_modules as $module=>$name) {
		array_push($allowed_modules_arr ,"\"$module\":1");
	} // foreach
	$allowed_modules_js = implode(",",$allowed_modules_arr);
	$smarty->assign('allowed_modules_js', "{".$allowed_modules_js."}");
	$smarty->assign('reporter_report_def_str1', $reporter->report_def_str);
	if (isset($reporter->report_def['goto_anchor'])) { 
		$goto_anchor = $reporter->report_def['goto_anchor'];
	} else {
		$goto_anchor = "\"\"";
	} // else
	$smarty->assign('goto_anchor', $goto_anchor);
	$user_array = get_user_array(FALSE);
	$smarty->assign('user_array', $user_array);
} // fn

/*
function template_reports_request_vars_js(&$reporter,&$args)
{

$field_defs = $reporter->focus->field_defs;

$table_columns = array();
$hidden_columns = array();


if ( ! isset($reporter->report_def['report_type']))
{
	$report_type = 'tabular';
}
else
{
	$report_type = $reporter->report_def['report_type'];
}
$allowed_modules_arr = array();
global $report_modules;
foreach($report_modules as $module=>$name)
{
	array_push($allowed_modules_arr ,"\"$module\":1");

}
$allowed_modules_js = implode(",",$allowed_modules_arr);
?>
<script language="javascript">
visible_modules = {<?php echo $allowed_modules_js; ?>};
*/
/*
function getFieldKey(field_def)
{
	if (typeof(field_def.group_function) != 'undefined')
	{
        	return field_def.table_key+":"+field_def.group_function+"_"+field_def.name;
	}
        return field_def.table_key+":"+field_def.name;
}


var visible_modules;
var report_def;
var current_module;
var visible_fields = new Array();
var visible_fields_map =  new Object();
var visible_summary_fields = new Array();
var visible_summary_field_map =  new Object();
var current_report_type; 
var display_columns_ref = 'display';
var hidden_columns_ref = 'hidden';
var field_defs;
var previous_links_map = new Object();
var previous_links =  new Array();
var display_summary_ref = 'display';
var hidden_summary_ref = 'hidden';
var users_array = new Array();
*/
/*
report_def = <?php echo $reporter->report_def_str; ?>;
<?php if ( isset($reporter->report_def['goto_anchor'])) { ?>
goto_anchor = "<?php echo $reporter->report_def['goto_anchor']; ?>";
<?php } else { ?>
goto_anchor = "";
<?php } ?>

function report_onload()
{
if (goto_anchor != '')
{
 var anch = document.getElementById(goto_anchor)
  if ( typeof(anch) != 'undefined' && anch != null)
  {
    anch.focus();
  }
}
else {
}
}
                                                                                
window.onload = report_onload;


current_module = report_def.module;
field_defs = module_defs[current_module].field_defs;
current_report_type = "<?php echo $report_type; ?>";
//current_db_type = "<?php echo $reporter->db->dbType; ?>";

for(var i in report_def.display_columns)
{

//alert("SL:"+report_def.display_columns[i]);
        visible_fields.push(getFieldKey(report_def.display_columns[i]));
        visible_fields_map[getFieldKey(report_def.display_columns[i])] = report_def.display_columns[i];
}

for(var i in report_def.summary_columns)
{
  if ( typeof(report_def.summary_columns[i].is_group_by) != 'undefined' && report_def.summary_columns[i].is_group_by == 'hidden')
  {
    continue;
  }
        visible_summary_fields.push(getFieldKey(report_def.summary_columns[i]));
        visible_summary_field_map[getFieldKey(report_def.summary_columns[i])] = report_def.summary_columns[i];
}


for(var i in report_def.links_def)
{
        previous_links_map[ report_def.links_def[i] ] = 1;
	previous_links.push( report_def.links_def[i]);
}



<?php
$user_array = get_user_array(FALSE);
foreach ($user_array as $user_id=>$user_name)
{
?>
users_array[users_array.length] = {text:'<?php echo $user_name; ?>',value:'<?php echo $user_id; ?>'};
<?php
} 

?>
</script>
<?php
}
*/
?>
