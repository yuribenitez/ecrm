<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
/* * *******************************************************************************
 * ****************************************************************************** */



require_once('include/Sugarpdf/SugarpdfFactory.php');

class ViewSugarpdf extends SugarView
{

    var $type = 'sugarpdf';

    /**
     * It is set by the "sugarpdf" request parameter and it is use by SugarpdfFactory to load the good sugarpdf class.
     * @var String
     */
    var $sugarpdf = 'default';

    /**
     * The sugarpdf object (Include the TCPDF object).
     * The atributs of this object are destroy in the output method.
     * @var Sugarpdf object
     */
    var $sugarpdfBean = NULL;

    function ViewSugarpdf()
    {
        parent::SugarView();
        if (isset($_REQUEST["sugarpdf"]))
            $this->sugarpdf = $_REQUEST["sugarpdf"];
        else
            header('Location:index.php?module=' . $_REQUEST['module'] . '&action=DetailView&record=' . $_REQUEST['record']);
    }

    function preDisplay()
    {
        $this->sugarpdfBean = SugarpdfFactory::loadSugarpdf($this->sugarpdf, $this->module, $this->bean, $this->view_object_map);

        // ACL control
        if (!empty($this->bean) && !$this->bean->ACLAccess($this->sugarpdfBean->aclAction))
        {
            ACLController::displayNoAccess(true);
            sugar_cleanup(true);
        }

        if (isset($this->errors))
        {
            $this->sugarpdfBean->errors = $this->errors;
        }
    }

    function display()
    {
        $this->sugarpdfBean->process();
        $this->sugarpdfBean->Output($this->sugarpdfBean->fileName, 'I');
    }

}

?>
