<?php

/* * *******************************************************************************
 * ****************************************************************************** */

class ViewSerialized extends SugarView
{

    var $type = 'detail';

    function ViewSerialized()
    {
        parent::SugarView();
    }

    function display()
    {
        ob_clean();
        echo serialize($this->bean->toArray());
        sugar_cleanup(true);
    }

}

?>
