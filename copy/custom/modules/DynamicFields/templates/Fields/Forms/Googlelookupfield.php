<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('custom/modules/DynamicFields/templates/Fields/TemplateGooglelookupfield.php');

/**
 * Implement get_body function to correctly populate the template for the ModuleBuilder/Studio
 * Add field page.
 *
 * @param Sugar_Smarty $ss
 * @param array $vardef
 *
 */
function get_body(&$ss, $vardef)
{
    global $app_list_strings, $mod_strings;
    $vars = $ss->get_template_vars();
    $fields = $vars['module']->mbvardefs->vardefs['fields'];
    $fieldOptions = array();
    foreach ($fields as $id => $def) {
        $fieldOptions[$id] = $def['name'];
    }
    $ss->assign('fieldOpts', $fieldOptions);

    // ext1
    if (isset($vardef['googleLookupType'])) {
        $googleLookupType = $vardef['googleLookupType'];
    } else {
        $googleLookupType = '';
    }

    $typesArray = $app_list_strings['googleLookupTypes'];
    // asort($typesArray);

    $ss->assign('googleLookupType', $googleLookupType);
    $ss->assign('googleLookupTypes', $typesArray);
    $ss->assign('googleLookupTypeName', $app_list_strings['googleLookupTypes'][$googleLookupType]);

    // ext2
    if (isset($vardef['googleFilterCountry'])) {
        $googleFilterCountry = $vardef['googleFilterCountry'];
    } else {
        $googleFilterCountry = '';
    }

    $countryArray = $app_list_strings['googleFilterCountries'];
    asort($countryArray);

    $ss->assign('googleFilterCountry', $googleFilterCountry);
    $ss->assign('googleFilterCountries', $countryArray);
    $ss->assign('googleFilterCountryName', $app_list_strings['googleFilterCountries'][$googleFilterCountry]);

    // ext3
    if (isset($vardef['googleLookupPopulate'])) {
        $googleLookupPopulate = $vardef['googleLookupPopulate'];
    } else {
        $googleLookupPopulate = false;
    }

    $populateArray = $app_list_strings['googleLookupPopulateOptions'];

    $ss->assign('googleLookupPopulate', $googleLookupPopulate);
    $ss->assign('googleLookupPopulateOptions', $populateArray);
    $ss->assign('googleLookupPopulateName', $app_list_strings['googleLookupPopulateOptions'][$googleLookupPopulate]);

    return $ss->fetch('custom/modules/DynamicFields/templates/Fields/Forms/Googlelookupfield.tpl');
}

?>