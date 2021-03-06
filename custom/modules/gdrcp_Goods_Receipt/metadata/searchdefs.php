<?php
$module_name = 'gdrcp_Goods_Receipt';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'po_number_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_PO_NUMBER',
        'width' => '10%',
        'name' => 'po_number_c',
      ),
      'receipt_id_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_RECEIPT_ID',
        'width' => '10%',
        'name' => 'receipt_id_c',
      ),
      'product_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PRODUCT',
        'id' => 'AOS_PRODUCTS_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'product_c',
      ),
      'received_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_RECEIVED_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'received_date',
      ),
      'storage' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_STORAGE',
        'width' => '10%',
        'default' => true,
        'name' => 'storage',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'po_number_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_PO_NUMBER',
        'width' => '10%',
        'name' => 'po_number_c',
      ),
      'packing_list_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PACKING_LIST',
        'width' => '10%',
        'name' => 'packing_list_c',
      ),
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'receipt_id_c' => 
      array (
        'type' => 'autoincrement',
        'default' => true,
        'label' => 'LBL_RECEIPT_ID',
        'width' => '10%',
        'name' => 'receipt_id_c',
      ),
      'product_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PRODUCT',
        'link' => true,
        'width' => '10%',
        'id' => 'AOS_PRODUCTS_ID_C',
        'name' => 'product_c',
      ),
      'storage' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_STORAGE',
        'width' => '10%',
        'default' => true,
        'name' => 'storage',
      ),
      'received_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_RECEIVED_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'received_date',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
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
