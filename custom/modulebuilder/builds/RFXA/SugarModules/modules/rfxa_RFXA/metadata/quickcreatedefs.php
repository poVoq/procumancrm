<?php
$module_name = 'rfxa_RFXA';
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
            'name' => 'received_date',
            'label' => 'LBL_RECEIVED_DATE',
          ),
          1 => 
          array (
            'name' => 'from_vendor',
            'studio' => 'visible',
            'label' => 'LBL_FROM_VENDOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'remarks',
            'label' => 'LBL_REMARKS',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
