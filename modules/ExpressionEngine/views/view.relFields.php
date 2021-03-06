<?php
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

require_once('include/MVC/View/views/view.ajax.php');
class ViewRelFields extends ViewAjax
{
    var $vars = array("tmodule", "id", "field", "rel_field");

    function __construct()
    {
        parent::ViewAjax();
        foreach($this->vars as $var)
        {
            if (empty($_REQUEST[$var]))
                sugar_die("Required paramter $var not set in ViewRelFields");
            $this->$var = $_REQUEST[$var];
        }

    }

 	function display() {
        //First load the primary bean
        $focus = $this->getBean($this->tmodule);
        $focus->retrieve($this->id);



        if (empty($focus->field_defs[$this->field]))
            sugar_die("Unable to find field {$this->field}");

        //now load the requested link field ($this->field must be a field of type link in the target module)
        $def = $focus->field_defs[$this->field];
        if (empty($def['relationship'])) {
            echo "<pre>" . print_r($def) . "</pre>";
            sugar_die("Unable to find relationship for field {$this->field}");
        }

        $lfield = $this->field;
        if(!$focus->load_relationship($this->field))
            sugar_die("Unable to load relationship $lfield");
        if(empty($focus->$lfield))
            sugar_die("Relationship $lfield was not set");
        $rmodule = $focus->$lfield->getRelatedModuleName();

        //now we need a seed of the related module to load.
        $seed = $this->getBean($rmodule);
        $rlist = $focus->$lfield->getBeans($seed);

        if (empty($rlist))
             sugar_die("No related beans found");
        //For now we are only returning the first related record found. Other operations may
        $rBean = $rlist[0];
        $rf = $this->rel_field;
        if (isset($rBean->$rf))
            echo json_encode($rBean->$rf);
        else
            sugar_die("Related field not set");
     }

    function getBean($module)
    {
       global $beanList;
       if (empty($beanList[$module]))
           sugar_die("No bean for module $module");
       $bean = $beanList[$module];
       return new $bean();
    }
}