<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/DynamicFields/templates/Fields/TemplateField.php');

class TemplateGooglelookupfield extends TemplateField
{
    var $type = 'varchar';
    var $supports_unified_search = true;

    /**
     * TemplateAutoincrement Constructor: Map the ext attribute fields to the relevant color properties
     *
     * References:      get_field_def function below
     *
     * @returns field_type
     */
    function __construct()
    {
        $this->vardef_map['ext1'] = 'googleLookupType';
        $this->vardef_map['googleLookupType'] = 'ext1';
        
        $this->vardef_map['ext2'] = 'googleFilterCountry';
        $this->vardef_map['googleFilterCountry'] = 'ext2';

        $this->vardef_map['ext3'] = 'googleLookupPopulate';
        $this->vardef_map['googleLookupPopulate'] = 'ext3';
    }

    //BEGIN BACKWARD COMPATIBILITY
    // AS 7.x does not have EditViews and DetailViews anymore these are here
    // for any modules in backwards compatibility mode.

    function get_xtpl_edit()
    {
        $name = $this->name;
        $returnXTPL = array();

        if (!empty($this->help)) {
            $returnXTPL[strtoupper($this->name . '_help')] = translate($this->help, $this->bean->module_dir);
        }

        if (isset($this->bean->$name)) {
            $returnXTPL[$this->name] = $this->bean->$name;
        } else {
            if (empty($this->bean->id)) {
                $returnXTPL[$this->name] = $this->default_value;
            }
        }
        return $returnXTPL;
    }

    function get_xtpl_search()
    {
        if (!empty($_REQUEST[$this->name])) {
            return $_REQUEST[$this->name];
        }
    }

    function get_xtpl_detail()
    {
        $name = $this->name;
        if (isset($this->bean->$name)) {
            return $this->bean->$name;
        }
        return '';
    }

    //END BACKWARD COMPATIBILITY

    /**
     * Function:        get_field_def
     * Description:        Get the field definition attributes that are required for the Highlightfield Field
     *                      the primary reason this function is here is to set the dbType to 'varchar',
     *                      otherwise 'Highlightfield' would be used by default.
     * References:      __construct function above
     *
     * @return            Field Definition
     */
    function get_field_def()
    {
        $def = parent::get_field_def();

        //set our fields database type
        $def['dbType'] = 'varchar';

        //map our extension fields 
        $def['googleLookupType'] = !empty($this->googleLookupType) ? $this->googleLookupType : $this->ext1;
        $def['googleFilterCountry'] = !empty($this->googleFilterCountry) ? $this->googleFilterCountry : $this->ext2;
        $def['googleLookupPopulate'] = !empty($this->googleLookupPopulate) ? $this->googleLookupPopulate : $this->ext3;

        return $def;
    }
}