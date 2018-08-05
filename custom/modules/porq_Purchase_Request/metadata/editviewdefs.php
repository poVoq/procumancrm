<?php
$module_name = 'porq_Purchase_Request';
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
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'justification',
            'studio' => 'visible',
            'label' => 'LBL_JUSTIFICATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'request_background_c',
            'studio' => 'visible',
            'label' => 'LBL_REQUEST_BACKGROUND',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'request_area_c',
            'studio' => 'visible',
            'label' => 'LBL_REQUEST_AREA',
          ),
          1 => 
          array (
            'name' => 'branch_c',
            'studio' => 'visible',
            'label' => 'LBL_BRANCH',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'asset_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_TYPE',
          ),
          1 => 
          array (
            'name' => 'department_c',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTMENT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'po_type_c',
            'studio' => 'visible',
            'label' => 'LBL_PO_TYPE',
          ),
          1 => 
          array (
            'name' => 'date_required_c',
            'label' => 'LBL_DATE_REQUIRED',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'business_area_c',
            'label' => 'LBL_BUSINESS_AREA',
          ),
          1 => 
          array (
            'name' => 'section_c',
            'label' => 'LBL_SECTION',
          ),
        ),
        7 => 
        array (
          0 => '',
        ),
      ),
    ),
  ),
);
;
?>
