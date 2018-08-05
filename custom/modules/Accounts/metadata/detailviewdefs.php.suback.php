<?php
// created: 2018-02-22 10:25:18
$viewdefs = array (
  'Accounts' => 
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
            'AOS_GENLET' => 
            array (
              'customCode' => '<input type="button" class="button" onClick="showPopup();" value="CREATE PDF">',
            ),
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
          'LBL_DETAILVIEW_PANEL1' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
        'syncDetailEditViews' => true,
      ),
      'panels' => 
      array (
        'lbl_account_information' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'vendor_id_c',
              'label' => 'LBL_VENDOR_ID',
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
              'name' => 'name',
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
            ),
            1 => 
            array (
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'website',
              'type' => 'link',
              'label' => 'LBL_WEBSITE',
              'displayParams' => 
              array (
                'link_target' => '_blank',
              ),
            ),
            1 => 
            array (
              'name' => 'phone_fax',
              'comment' => 'The fax phone number of this company',
              'label' => 'LBL_FAX',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'email1',
              'studio' => 'false',
              'label' => 'LBL_EMAIL',
            ),
            1 => 
            array (
              'name' => 'billing_address_street',
              'label' => 'LBL_BILLING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'billing',
              ),
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
            1 => 
            array (
              'name' => 'credit_limit_c',
              'label' => 'LBL_CREDIT_LIMIT',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'tax_number_c',
              'label' => 'LBL_TAX_NUMBER',
            ),
            1 => 
            array (
              'name' => 'trade_lic_exp_c',
              'label' => 'LBL_TRADE_LIC_EXP',
            ),
          ),
          6 => 
          array (
            0 => 'prequalification_approved_c',
            1 => 'joomla_id_c',
          ),
          7 => 
          array (
            0 => 'pdf_url_nondb',
            1 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'bank_details_c',
              'studio' => 'visible',
              'label' => 'LBL_BANK_DETAILS',
            ),
            1 => '',
          ),
        ),
        'lbl_detailview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'catalog_name_c',
              'label' => 'LBL_CATALOG_NAME',
            ),
            1 => 
            array (
              'name' => 'catalog_version_c',
              'label' => 'LBL_CATALOG_VERSION',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'catalog_url_c',
              'label' => 'LBL_CATALOG_URL',
              'type' => 'readonly',
              'customCode' => '{if !empty($fields.catalog_url_c.value)}<span><a href="{$fields.catalog_url_c.value}" target="_new" >Download Portal Catalog</a></span>{/if}',
            ),
            1 => '',
          ),
        ),
      ),
    ),
  ),
);