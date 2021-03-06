<?php
$module_name = 'RFX_RFx';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'RFX_TITLE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RFX_TITLE',
    'width' => '10%',
  ),
  'RFX_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RFX_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'RFX_VALID_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_RFX_VALID',
    'width' => '10%',
  ),
  'REQUEST_SENT_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_REQUEST_SENT_DATE',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'RFX_ID_C' => 
  array (
    'type' => 'autoincrement',
    'default' => false,
    'label' => 'LBL_RFX_ID',
    'width' => '10%',
  ),
);
?>
