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

 * Description: Bean for import_map table
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/



class ImportMap extends SugarBean
{
    /**
     * Fields in the table
     */
    public $id;
    public $name;
    public $module;
    public $source;
    public $delimiter;
    public $enclosure;
    public $content;
    public $default_values;
    public $has_header;
    public $deleted;
    public $date_entered;
    public $date_modified;
    public $assigned_user_id;
    public $is_published;

    /**
     * Set the default settings from Sugarbean
     */
    public $table_name  = "import_maps";
    public $object_name = "ImportMap";
    public $module_dir  = 'Import';
    public $new_schema  = true;
    var $disable_custom_fields = true;
    public $column_fields = array(
        "id",
        "name",
        "module",
        "source",
        "enclosure",
        "delimiter",
        "content",
        "has_header",
        "deleted",
        "date_entered",
        "date_modified",
        "assigned_user_id",
        "is_published",
        );

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::SugarBean();
        $this->disable_row_level_security =true;
    }

    /**
     * Returns an array with the field mappings
     *
     * @return array
     */
    public function getMapping()
    {
        $mapping_arr = array();
        if ( !empty($this->content) )
        {
            $pairs = explode("&",$this->content);
            foreach ($pairs as $pair){
                list($name,$value) = explode("=",$pair);
                $mapping_arr[trim($name)] = $value;
            }
        }

        return $mapping_arr;
    }

    /**
     * Sets $content with the mapping given
     *
     * @param string $mapping_arr
     */
    public function setMapping(
        $mapping_arr
        )
    {
        $output = array ();
        foreach ($mapping_arr as $key => $item) {
            $output[] = "$key=$item";
        }
        $this->content = implode("&", $output);
    }

    /**
     * Returns an array with the default field values
     *
     * @return array
     */
    public function getDefaultValues()
    {
        $defa_arr = array();
        if ( !empty($this->default_values) )
        {
            $pairs = explode("&",$this->default_values);
            foreach ($pairs as $pair){
                list($name,$value) = explode("=",$pair);
                $defa_arr[trim($name)] = $value;
            }
        }

        return $defa_arr;
    }

    /**
     * Sets $default_values with the default values given
     *
     * @param string $defa_arr
     */
    public function setDefaultValues(
        $defa_arr
        )
    {
        $output = array ();
        foreach ($defa_arr as $key => $item) {
            $output[] = "$key=$item";
        }
        $this->default_values = implode("&", $output);
    }
    
    /**
     * @see SugarBean::retrieve()
     */
    public function retrieve($id = -1, $encode=true,$deleted=true)
	{
	    $returnVal = parent::retrieve($id,$encode,$deleted);
	    
	    if ( !($returnVal instanceOf $this) ) {
	        return $returnVal;
	    }
	    
	    if ( $this->source == 'tab' && $this->delimiter == '' ) {
	        $this->delimiter = "\t";
	    }
	    
	    return $this;
	}

    /**
     * Save
     *
     * @param  string $owner_id
     * @param  string $name
     * @param  string $module
     * @param  string $source
     * @param  string $has_header
     * @param  string $delimiter
     * @param  string $enclosure
     * @return bool
     */
    public function save(
        $owner_id,
        $name,
        $module,
        $source,
        $has_header,
        $delimiter,
        $enclosure
        )
    {
        $olddefault_values = $this->default_values;
        $oldcontent = $this->content;

        $this->retrieve_by_string_fields(
            array(
                'assigned_user_id'=>$owner_id,
                'name'=>$name),
            false
            );

        // Bug 23354 - Make sure enclosure gets saved as an empty string if
        // it is an empty string, instead of as a null
        if ( strlen($enclosure) <= 0 ) $enclosure = ' ';

        $this->assigned_user_id = $owner_id;
        $this->name             = $name;
        $this->source           = $source;
        $this->module           = $module;
        $this->delimiter        = $delimiter;
        $this->enclosure        = $enclosure;
        $this->has_header       = $has_header;
        $this->deleted          = 0;
        $this->default_values   = $olddefault_values;
        $this->content          = $oldcontent;
        parent::save();

        // Bug 29365 - The enclosure character isn't saved correctly if it's a tab using MssqlManager, so resave it
        if ( $enclosure == '\\t' && $this->db instanceOf MssqlManager ) {
            $this->enclosure = $enclosure;
            parent::save();
        }

        return 1;
    }

    /**
     * Checks to see if the user owns this mapping or is an admin first
     * If true, then call parent function
     *
     * @param $id
     */
    public function mark_deleted(
        $id
        )
    {
        global $current_user;

        if ( !is_admin($current_user) ) {
            $other_map = new ImportMap();
            $other_map->retrieve_by_string_fields(array('id'=> $id), false);

            if ( $other_map->assigned_user_id != $current_user->id )
                return false;
        }

        return parent::mark_deleted($id);
    }

    /**
     * Mark an import map as published
     *
     * @param  string $user_id
     * @param  bool   $flag     true if we are publishing or false if we are unpublishing
     * @return bool
     */
    public function mark_published(
        $user_id,
        $flag
        )
    {
        global $current_user;

        if ( !is_admin($current_user) )
            return false;

        // check for problems
        if ($flag) {
            // if you are trying to publish your map
            // but there's another published map
            // by the same name
            $query_arr = array(
                'name'         =>$this->name,
                'is_published' =>'yes'
                );
        }
        else {
            // if you are trying to unpublish a map
            // but you own an unpublished map by the same name
            $query_arr = array(
                'name'             => $this->name,
                'assigned_user_id' => $user_id,
                'is_published'     => 'no'
                );
        }
        $other_map = new ImportMap();
        $other_map->retrieve_by_string_fields($query_arr, false);

        // if we find this other map, quit
        if ( isset($other_map->id) )
            return false;

        // otherwise update the is_published flag
        $query = "UPDATE $this->table_name
                    SET is_published = '". ($flag?'yes':'no') . "',
                        assigned_user_id = '$user_id'
                    WHERE id = '{$this->id}'";

        $this->db->query($query,true,"Error marking import map published: ");

        return true;
    }

    /**
     * Similar to retrieve_by_string_fields, but returns multiple objects instead of just one.
     *
     * @param  array $fields_array
     * @return array $obj_arr
     */
    public function retrieve_all_by_string_fields(
        $fields_array
        )
    {
        $query = "SELECT *
                    FROM {$this->table_name}
                    " . $this->get_where($fields_array);

        $result = $this->db->query($query,true," Error: ");
        $obj_arr = array();

        while ($row = $this->db->fetchByAssoc($result,-1,FALSE) ) {
            $focus = new ImportMap();

            foreach($this->column_fields as $field) {
                if(isset($row[$field])) {
                    $focus->$field = $row[$field];
                }
            }
            $focus->fill_in_additional_detail_fields();
            $obj_arr[]=$focus;
        }

        return $obj_arr;
    }

}


?>
