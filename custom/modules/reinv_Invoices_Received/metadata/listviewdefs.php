<?php
$module_name = 'reinv_Invoices_Received';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PO_NUMBER_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_PO_NUMBER',
    'width' => '10%',
  ),
  'PURCHASE_ORDER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PURCHASE_ORDER',
    'id' => 'AOS_QUOTES_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'REFERENCE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REFERENCE',
    'width' => '10%',
  ),
  'INVOICE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INVOICE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'INVOICE_PAID' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INVOICE_PAID',
    'width' => '10%',
    'default' => true,
  ),
  'INVOICE_VALUE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_INVOICE_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'INVOICE_STATUS_C' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_INVOICE_STATUS_C',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
?>
