<?php
$module_name = 'stkwd_stock_withdrawal';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'withdrawal_id_c',
            'label' => 'LBL_WITHDRAWAL_ID',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pick_date',
            'label' => 'LBL_PICK_DATE',
          ),
          1 => 
          array (
            'name' => 'quantity',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'location',
            'label' => 'LBL_LOCATION',
          ),
          1 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 'date_entered',
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        4 => 
        array (
          0 => 'date_modified',
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'remark',
            'label' => 'LBL_REMARK',
          ),
          1 => 
          array (
            'name' => 'request',
            'studio' => 'visible',
            'label' => 'LBL_REQUEST',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'aos_products_stkwd_stock_withdrawal_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
