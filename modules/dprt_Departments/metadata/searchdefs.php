<?php
$module_name = 'dprt_Departments';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'abbreviation' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ABBREVIATION',
        'width' => '10%',
        'default' => true,
        'name' => 'abbreviation',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'abbreviation' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ABBREVIATION',
        'width' => '10%',
        'default' => true,
        'name' => 'abbreviation',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
