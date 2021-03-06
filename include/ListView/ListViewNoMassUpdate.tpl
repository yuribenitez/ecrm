{*

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




*}

{if $overlib}
    <script type='text/javascript' src='include/javascript/overlibmws.js'></script>
    <script type='text/javascript' src='include/javascript/overlibmws_iframe.js'></script>
    <div id='overDiv' style='position:absolute; visibility:hidden; z-index:1000;'></div>
{/if}

<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list View'>
    {include file='include/ListView/ListViewPagination.tpl'}

    <tr height='20'>
        {if !empty($quickViewLinks)}
            <th scope='col' nowrap="nowrap" width='1%'>&nbsp;</th>
        {/if}
        {counter start=0 name="colCounter" print=false assign="colCounter"}
        {foreach from=$displayColumns key=colHeader item=params}
            <th scope='col' width='{$params.width}%' nowrap="nowrap">
                <span sugar="sugar{$colCounter}"><div style='white-space: nowrap;'width='100%' align='{$params.align|default:'left'}'>
                        {if $params.sortable|default:true}
                            <a href='{$pageData.urls.orderBy}{$params.orderBy|default:$colHeader|lower}' class='listViewThLinkS1'>{sugar_translate label=$params.label module=$pageData.bean.moduleDir}</a>&nbsp;&nbsp;
                            {if $params.orderBy|default:$colHeader|lower == $pageData.ordering.orderBy}
                                {if $pageData.ordering.sortOrder == 'ASC'}
                                {capture assign="imageName"}arrow_down.{$arrowExt}{/capture}
                                <img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
                            {else}
                            {capture assign="imageName"}arrow_up.{$arrowExt}{/capture}
                            <img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
                        {/if}
                    {else}
                    {capture assign="imageName"}arrow.{$arrowExt}{/capture}
                    <img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
                {/if}
            {else}
                {sugar_translate label=$params.label module=$pageData.bean.moduleDir}
            {/if}
        </div></span sugar='sugar{$colCounter}'>
</th>
{counter name="colCounter"}
{/foreach}
</tr>

{foreach name=rowIteration from=$data key=id item=rowData}
    {if $smarty.foreach.rowIteration.iteration is odd}
        {assign var='_rowColor' value=$rowColor[0]}
    {else}
        {assign var='_rowColor' value=$rowColor[1]}
    {/if}
    <tr height='20' class='{$_rowColor}S1'>
        {if !empty($quickViewLinks)}
            <td width='1%' nowrap>
                {if $pageData.access.edit && $pageData.bean.moduleDir != "Employees"}
                    <a title='{$editLinkString}' href='index.php?action=EditView&module={$params.module|default:$pageData.bean.moduleDir}&record={$rowData[$params.id]|default:$rowData.ID}&offset={$pageData.offsets.current+$smarty.foreach.rowIteration.iteration}&stamp={$pageData.stamp}&return_module={$params.module|default:$pageData.bean.moduleDir}'><img border="0" src="{sugar_getimagepath file="edit_inline.gif"}"></a>
                    {/if}
            </td>
        {/if}
        {counter start=0 name="colCounter" print=false assign="colCounter"}
        {foreach from=$displayColumns key=col item=params}
            <td scope='row' align='{$params.align|default:'left'}' {if $params.nowrap}nowrap='nowrap' {/if}valign='top'><span sugar="sugar{$colCounter}b">
                {if $col == 'NAME' || $params.bold}<b>{/if}
                    {if $params.link && !$params.customCode}
                        <{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN} href="#" onMouseOver="javascript:lvg_nav('{if $params.dynamic_module}{$rowData[$params.dynamic_module]}{else}{$params.module|default:$pageData.bean.moduleDir}{/if}', '{$rowData[$params.id]|default:$rowData.ID}', 'd', {$smarty.foreach.rowIteration.iteration}, this);"  onFocus="javascript:lvg_nav('{if $params.dynamic_module}{$rowData[$params.dynamic_module]}{else}{$params.module|default:$pageData.bean.moduleDir}{/if}', '{$rowData[$params.id]|default:$rowData.ID}', 'd', {$smarty.foreach.rowIteration.iteration}, this);">
                    {/if}
                    {if $params.customCode} 
                        {sugar_evalcolumn_old var=$params.customCode rowData=$rowData}
                    {else}	
                        {sugar_field parentFieldArray=$rowData vardef=$params displayType=ListView field=$col}
                    {/if}
                {if empty($rowData.$col)}&nbsp;{/if}
                {if $params.link && !$params.customCode}
                    </{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN}>
                {/if}
            {if $col == 'NAME' || $params.bold}</b>{/if}
    </span sugar='sugar{$colCounter}b'></td>
    {counter name="colCounter"}
{/foreach}
</tr>
{foreachelse}
    <tr height='20' class='{$rowColor[0]}S1'>
        <td colspan="{$colCount}">
            <em>{$APP.LBL_NO_DATA}</em>
        </td>
    </tr>	
{/foreach}
{include file='include/ListView/ListViewPagination.tpl'}
</table>
<script type='text/javascript'>
{literal}function lvg_nav(m,id,act,offset,t){if(t.href.search(/#/) < 0){return;}else{if(act=='pte'){act='ProjectTemplatesEditView';}else if(act=='d'){ act='DetailView';}else if( act =='ReportsWizard'){act = 'ReportsWizard';}else{ act='EditView';}{/literal}url = 'index.php?module='+m+'&offset=' + offset + '&stamp={$pageData.stamp}&return_module='+m+'&action='+act+'&record='+id;t.href=url;{literal}}}{/literal}
{literal}function lvg_dtails(id){{/literal}return SUGAR.util.getAdditionalDetails( '{$params.module|default:$pageData.bean.moduleDir}',id, 'adspan_'+id);{literal}}{/literal}
{if $contextMenus}
    {$contextMenuScript}
{/if}
</script>
