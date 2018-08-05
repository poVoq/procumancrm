<?php
$module_name = 'AOS_Quotes';
$_object_name = 'aos_quotes';
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
          4 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" title="{$MOD.LBL_PRINT_AS_PDF}" value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
          5 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'emailpdf\');" title="{$MOD.LBL_EMAIL_PDF}" value="{$MOD.LBL_EMAIL_PDF}">',
          ),
          6 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'email\');" title="{$MOD.LBL_EMAIL_QUOTE}" value="{$MOD.LBL_EMAIL_QUOTE}">',
          ),
		  7 => 
          array (
            'customCode' => '{if $fields.stage.value != "Delivered" &&  $fields.stage.value != "Partial_delivery" && $SHOW_GOODRECEIVED_BTN}<input type="button" class="button" onClick="receiveGoods(\'{$fields.id.value}\');" title="{$MOD.LBL_RECEIVE_GOODS}" value="{$MOD.LBL_RECEIVE_GOODS}">{/if}',
          ),
		  8 => 
          array (
            'customCode' => '{$RECEIVE_INVOICE_BTN}',
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
            'file' => 'custom/modules/AOS_Quotes/js/DetailView.js',
          ),
		  1 => 
		  array (
		    'file' => 'cache/include/javascript/sugar_grp_yui_widgets.js',
		  ),
        ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_PANEL_OVERVIEW' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_LINE_ITEMS' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_PANEL_OVERVIEW' => 
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
            'name' => 'number',
            'label' => 'LBL_QUOTE_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'stage',
            'label' => 'LBL_STAGE',
          ),
          1 => 
          array (
            'name' => 'invoice_status',
            'label' => 'LBL_INVOICE_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_account',
            'label' => 'LBL_BILLING_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'expiration',
            'label' => 'LBL_EXPIRATION',
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
            'name' => 'term',
            'label' => 'LBL_TERM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'approval_status',
            'label' => 'LBL_APPROVAL_STATUS',
          ),
          1 => 
          array (
            'name' => 'po_reference_c',
            'label' => 'LBL_PO_REFERENCE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'costc_cost_center_aos_quotes_1_name',
          ),
          1 => 
          array (
            'name' => 'currency_code_c',
            'label' => 'LBL_CURRENCY_CODE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_required_c',
            'label' => 'LBL_DATE_REQUIRED',
          ),
          1 => 
          array (
            'name' => 'reinv_invoices_received_aos_quotes_1_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'incoterms_c',
            'studio' => 'visible',
            'label' => 'LBL_INCOTERMS',
          ),
          1 => 
          array (
            'name' => 'supplier_reference_c',
            'label' => 'LBL_SUPPLIER_REFERENCE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'project_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'documents_c',
            'studio' => 'visible',
            'label' => 'LBL_DOCUMENTS',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_line_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
		  1=>'',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'line_items',
            'label' => 'LBL_LINE_ITEMS',
          ),
		  
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'total_amt',
            'label' => 'LBL_TOTAL_AMT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'discount_amount',
            'label' => 'LBL_DISCOUNT_AMOUNT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'subtotal_amount',
            'label' => 'LBL_SUBTOTAL_AMOUNT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'shipping_amount',
            'label' => 'LBL_SHIPPING_AMOUNT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'shipping_tax_amt',
            'label' => 'LBL_SHIPPING_TAX_AMT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'tax_amount',
            'label' => 'LBL_TAX_AMOUNT',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'total_amount',
            'label' => 'LBL_GRAND_TOTAL',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
      ),
    ),
  ),
);
?>
