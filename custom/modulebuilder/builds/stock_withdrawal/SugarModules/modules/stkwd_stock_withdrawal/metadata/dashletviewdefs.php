<?php
$dashletData['stkwd_stock_withdrawalDashlet']['searchFields'] = array (
  'pick_date' => 
  array (
    'default' => '',
  ),
  'location' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['stkwd_stock_withdrawalDashlet']['columns'] = array (
  'pick_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PICK_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'quantity' => 
  array (
    'type' => 'float',
    'default' => true,
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
  ),
  'request' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_REQUEST',
    'id' => 'PORQ_PURCHASE_REQUEST_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
