<?php
$module_name = 'pay_payments';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
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
            'name' => 'payment_status',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_STATUS',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'payment_type',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_TYPE',
          ),
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'payment_date',
            'label' => 'LBL_PAYMENT_DATE',
          ),
          1 => 
          array (
            'name' => 'requested_amount',
            'label' => 'LBL_REQUESTED_AMOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'approved_amount',
            'label' => 'LBL_APPROVED_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
