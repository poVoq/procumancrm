<?php
$module_name = 'appr_Approvals';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'approval_level',
            'studio' => 'visible',
            'label' => 'LBL_APPROVAL_LEVEL',
          ),
          1 => 
          array (
            'name' => 'approval_status',
            'studio' => 'visible',
            'label' => 'LBL_APPROVAL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'approved_amount',
            'label' => 'LBL_APPROVED_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'remark',
            'label' => 'LBL_REMARK',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
