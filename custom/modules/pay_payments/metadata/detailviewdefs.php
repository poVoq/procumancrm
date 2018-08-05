<?php
$module_name = 'pay_payments';
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'payment_status',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'payment_type',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_TYPE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
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
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'request_remarks',
            'studio' => 'visible',
            'label' => 'LBL_REQUEST_REMARKS',
          ),
          1 => 
          array (
            'name' => 'payment_remarks',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_REMARKS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'porq_purchase_request_pay_payments_1_name',
          ),
          1 => 
          array (
            'name' => 'aos_quotes_pay_payments_1_name',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'reinv_invoices_received_pay_payments_1_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
