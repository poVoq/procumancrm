<?php
$module_name = 'rfxa_RFXA';
$listViewDefs [$module_name] = 
array (
  'RFXA_ID' => 
  array (
    'type' => 'autoincrement',
    'label' => 'LBL_RFXA_ID',
    'width' => '10%',
    'default' => true,
  ),
  'FROM_VENDOR' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_FROM_VENDOR',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'RFXA_SELECTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RFXA_SELECTION',
    'width' => '10%',
    'default' => true,
  ),
  'RECEIVED_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RECEIVED_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
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
  'REMARKS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REMARKS',
    'width' => '10%',
    'default' => false,
  ),
);
?>
