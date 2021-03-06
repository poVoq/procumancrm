<?php
$module_name = 'brch_Branch';
$_object_name = 'brch_branch';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'company_name_c',
            'label' => 'LBL_COMPANY_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'website',
          1 => 'phone_office',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'headquarter_c',
            'label' => 'LBL_HEADQUARTER',
          ),
          1 => 'phone_fax',
        ),
        3 => 
        array (
        ),
        4 => 
        array (
          0 => 'brch_branch_type',
          1 => 
          array (
            'name' => 'tax_number_c',
            'label' => 'LBL_TAX_NUMBER',
          ),
        ),
        5 => 
        array (
          0 => 'date_entered',
          1 => 'billing_address_street',
        ),
        6 => 
        array (
          0 => 'shipping_address_street',
          1 => 'email1',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'company_website_c',
            'label' => 'LBL_COMPANY_WEBSITE',
          ),
          1 => 'description',
        ),
        8 => 
        array (
        ),
      ),
    ),
  ),
);
;
?>
