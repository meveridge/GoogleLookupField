<?php

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    'regex_matches' => array(
        '7\.[5-7]',
    ),
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 1460154916,
  'author' => 'Mark Everidge',
  'description' => 'Creates an address lookup field utilizing Google\'s Places API.',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Google Lookup Field',
  'published_date' => '2016-04-08 22:35:16',
  'type' => 'module',
  'version' => '1423619412',
  'remove_tables' => '',
);

$installdefs = array (
  'id' => 1460154916,
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/copy/custom/Extension/application/Ext/JSGroupings/GoogleApi.php',
      'to' => 'custom/Extension/application/Ext/JSGroupings/GoogleApi.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/copy/custom/Extension/application/Ext/Language/en_us.Googlelookupfield.php',
      'to' => 'custom/Extension/application/Ext/Language/en_us.Googlelookupfield.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/copy/custom/Extension/modules/DynamicFields/Ext/Language/en_us.Googlelookupfield.php',
      'to' => 'custom/Extension/modules/DynamicFields/Ext/Language/en_us.Googlelookupfield.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/copy/custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.Googlelookup.php',
      'to' => 'custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.Googlelookup.php',
    ),
    4 => 
    array (
      'from' => '<basepath>/copy/custom/include/SugarFields/Fields/Googlelookup/SugarFieldGooglelookupfield.php',
      'to' => 'custom/include/SugarFields/Fields/Googlelookup/SugarFieldGooglelookupfield.php',
    ),
    5 => 
    array (
      'from' => '<basepath>/copy/custom/include/javascript/googleAPISrc.js',
      'to' => 'custom/include/javascript/googleAPISrc.js',
    ),
    6 => 
    array (
      'from' => '<basepath>/copy/custom/modules/DynamicFields/templates/Fields/Forms/Googlelookupfield.php',
      'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/Googlelookupfield.php',
    ),
    7 => 
    array (
      'from' => '<basepath>/copy/custom/modules/DynamicFields/templates/Fields/Forms/Googlelookupfield.tpl',
      'to' => 'custom/modules/DynamicFields/templates/Fields/Forms/Googlelookupfield.tpl',
    ),
    8 => 
    array (
      'from' => '<basepath>/copy/custom/modules/DynamicFields/templates/Fields/TemplateGooglelookupfield.php',
      'to' => 'custom/modules/DynamicFields/templates/Fields/TemplateGooglelookupfield.php',
    ),
    9 => 
    array (
      'from' => '<basepath>/copy/custom/clients/base/fields/Googlelookupfield',
      'to' => 'custom/clients/base/fields/Googlelookupfield',
    ),
  ),
);

?>