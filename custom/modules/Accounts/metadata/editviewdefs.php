<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'internal_supplier_id_c',
            'label' => 'LBL_INTERNAL_SUPPLIER_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tax_number_c',
            'label' => 'LBL_TAX_NUMBER',
          ),
          1 => 
          array (
            'name' => 'contactperson_c',
            'label' => 'LBL_CONTACTPERSON',
          ),
        ),
        5 => 
        array (
          0 => 'prequalification_approved_c',
          1 => 
          array (
            'name' => 'trade_lic_exp_c',
            'label' => 'LBL_TRADE_LIC_EXP',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'credit_limit_c',
            'label' => 'LBL_CREDIT_LIMIT',
          ),
          1 => 
          array (
            'name' => 'joomla_id_c',
            'label' => 'LBL_JOOMLA_ID_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'bank_details_c',
            'studio' => 'visible',
            'label' => 'LBL_BANK_DETAILS',
          ),
        ),
        8 => 
        array (
          0 => '',
        ),
      ),
    ),
  ),
);
?>
