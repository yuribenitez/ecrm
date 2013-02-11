{*

*}

<span id="no_chart_text">{$mod_strings.LBL_GROUP_BY_REQUIRED}</span>
<span scope="row"><h5>{$mod_strings.LBL_CHART_TYPE}:</h5></span>
<table width="100%" cellpadding=0 cellspacing=0>
<tr>
<td align=left>
<select name='chart_type'>
{foreach from=$chart_types key=thekey item=theval}
<option value="{$thekey}" {if $report_def.chart_type eq $thekey} "SELECTED" {/if}>{$theval}</option>
{/foreach}
</select>
</td>
</tr>
</table>
<P/>
<span scope="row"><h5>{$mod_strings.LBL_USE_COLUMN_FOR}:</h5></span>
<table width="100%" cellpadding=0 cellspacing=0>
<tr>
<td align=left>
<select name='numerical_chart_column'>
</select>
</td>
</tr>
</table>
<P/>
<span scope="row"><h5>{$mod_strings.LBL_CHART_DESCRIPTION}:</h5></span>
<table width="100%" cellpadding=0 cellspacing=0>
<tr>
<td align=left>
<input name='chart_description' size='50' value="{$chart_description}" maxsize="255"/>
</td>
</tr>
</table>
