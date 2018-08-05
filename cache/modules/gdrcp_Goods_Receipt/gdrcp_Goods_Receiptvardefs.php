<?php 
 $GLOBALS["dictionary"]["gdrcp_Goods_Receipt"]=array (
  'table' => 'gdrcp_goods_receipt',
  'audited' => true,
  'inline_edit' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => '255',
      'unified_search' => false,
      'full_text_search' => 
      array (
      ),
      'required' => false,
      'importable' => 'required',
      'duplicate_merge' => 'disabled',
      'merge_filter' => 'disabled',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'size' => '20',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
      'inline_edit' => '',
      'comments' => 'Full text of the note',
      'merge_filter' => 'disabled',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => true,
      'comment' => 'Record deletion indicator',
      'inline_edit' => '',
      'comments' => 'Record deletion indicator',
      'merge_filter' => 'disabled',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'gdrcp_goods_receipt_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'gdrcp_goods_receipt_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'gdrcp_goods_receipt_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_gdrcp_goods_receipt',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'received_date' => 
    array (
      'required' => true,
      'name' => 'received_date',
      'vname' => 'LBL_RECEIVED_DATE',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'display_default' => 'now',
    ),
    'quantity' => 
    array (
      'required' => true,
      'name' => 'quantity',
      'vname' => 'LBL_QUANTITY',
      'type' => 'decimal',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '8',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'storage' => 
    array (
      'required' => false,
      'name' => 'storage',
      'vname' => 'LBL_STORAGE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '50',
      'size' => '20',
    ),
    'remarks' => 
    array (
      'required' => false,
      'name' => 'remarks',
      'vname' => 'LBL_REMARKS',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'currency_id' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'currency_id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'dbType' => 'id',
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
      'id' => 'gdrcp_Goods_Receiptcurrency_id',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'receipt_id_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Receipt ID',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'receipt_id_c',
      'vname' => 'LBL_RECEIPT_ID',
      'type' => 'autoincrement',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 80,
      'size' => '20',
      'dbType' => 'varchar',
      'format' => '{GR}{}{}{}{0000}{}{}',
      'start_number' => '0001',
      'id' => 'gdrcp_Goods_Receiptreceipt_id_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'product_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Product',
      'required' => false,
      'source' => 'non-db',
      'name' => 'product_c',
      'vname' => 'LBL_PRODUCT',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'aos_products_id_c',
      'ext2' => 'AOS_Products',
      'module' => 'AOS_Products',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'gdrcp_Goods_Receiptproduct_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'gdrcp_goods_receipt_documents_1' => 
    array (
      'name' => 'gdrcp_goods_receipt_documents_1',
      'type' => 'link',
      'relationship' => 'gdrcp_goods_receipt_documents_1',
      'source' => 'non-db',
      'module' => 'Documents',
      'bean_name' => 'Document',
      'side' => 'right',
      'vname' => 'LBL_GDRCP_GOODS_RECEIPT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'po_line_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'PO Line',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'po_line_c',
      'vname' => 'LBL_PO_LINE',
      'type' => 'int',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
      'id' => 'gdrcp_Goods_Receiptpo_line_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'aos_products_quotes_gdrcp_goods_receipt_1' => 
    array (
      'name' => 'aos_products_quotes_gdrcp_goods_receipt_1',
      'type' => 'link',
      'relationship' => 'aos_products_quotes_gdrcp_goods_receipt_1',
      'source' => 'non-db',
      'module' => 'AOS_Products_Quotes',
      'bean_name' => 'AOS_Products_Quotes',
      'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_AOS_PRODUCTS_QUOTES_TITLE',
      'id_name' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
    ),
    'aos_products_quotes_gdrcp_goods_receipt_1_name' => 
    array (
      'name' => 'aos_products_quotes_gdrcp_goods_receipt_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_AOS_PRODUCTS_QUOTES_TITLE',
      'save' => true,
      'id_name' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
      'link' => 'aos_products_quotes_gdrcp_goods_receipt_1',
      'table' => 'aos_products_quotes',
      'module' => 'AOS_Products_Quotes',
      'rname' => 'name',
    ),
    'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida' => 
    array (
      'name' => 'aos_products_quotes_gdrcp_goods_receipt_1aos_products_quotes_ida',
      'type' => 'link',
      'relationship' => 'aos_products_quotes_gdrcp_goods_receipt_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AOS_PRODUCTS_QUOTES_GDRCP_GOODS_RECEIPT_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
    ),
    'aos_products_id_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'aos_products_id_c',
      'vname' => 'LBL_PRODUCT_AOS_PRODUCTS_ID',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'gdrcp_Goods_Receiptaos_products_id_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'reinv_invoices_received_gdrcp_goods_receipt_1' => 
    array (
      'name' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
      'type' => 'link',
      'relationship' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
      'source' => 'non-db',
      'module' => 'reinv_Invoices_Received',
      'bean_name' => 'reinv_Invoices_Received',
      'vname' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
      'id_name' => 'reinv_invoa2ffeceived_ida',
    ),
    'reinv_invoices_received_gdrcp_goods_receipt_1_name' => 
    array (
      'name' => 'reinv_invoices_received_gdrcp_goods_receipt_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
      'save' => true,
      'id_name' => 'reinv_invoa2ffeceived_ida',
      'link' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
      'table' => 'reinv_invoices_received',
      'module' => 'reinv_Invoices_Received',
      'rname' => 'name',
    ),
    'reinv_invoa2ffeceived_ida' => 
    array (
      'name' => 'reinv_invoa2ffeceived_ida',
      'type' => 'link',
      'relationship' => 'reinv_invoices_received_gdrcp_goods_receipt_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_REINV_INVOICES_RECEIVED_GDRCP_GOODS_RECEIPT_1_FROM_GDRCP_GOODS_RECEIPT_TITLE',
    ),
    'quantity_invoiced_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Quantity Invoiced',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'quantity_invoiced_c',
      'vname' => 'LBL_QUANTITY_INVOICED',
      'type' => 'float',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '8',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
      'id' => 'gdrcp_Goods_Receiptquantity_invoiced_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'packing_list_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Packing List Nr.',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'packing_list_c',
      'vname' => 'LBL_PACKING_LIST',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '30',
      'size' => '20',
      'id' => 'gdrcp_Goods_Receiptpacking_list_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'po_number_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'PO Number',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'po_number_c',
      'vname' => 'LBL_PO_NUMBER',
      'type' => 'int',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
      'id' => 'gdrcp_Goods_Receiptpo_number_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'quantity_rejected_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Quantity Rejected',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'quantity_rejected_c',
      'vname' => 'LBL_QUANTITY_REJECTED',
      'type' => 'float',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '8',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
      'id' => 'gdrcp_Goods_Receiptquantity_rejected_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'quantity_ordered_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Quantity Ordered',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'quantity_ordered_c',
      'vname' => 'LBL_QUANTITY_ORDERED',
      'type' => 'float',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '8',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
      'id' => 'gdrcp_Goods_Receiptquantity_ordered_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
    'invoiced_amount_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Invoiced Amount',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'invoiced_amount_c',
      'vname' => 'LBL_INVOICED_AMOUNT',
      'type' => 'currency',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '26',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'id' => 'gdrcp_Goods_Receiptinvoiced_amount_c',
      'custom_module' => 'gdrcp_Goods_Receipt',
    ),
  ),
  'relationships' => 
  array (
    'gdrcp_goods_receipt_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'gdrcp_Goods_Receipt',
      'rhs_table' => 'gdrcp_goods_receipt',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'gdrcp_goods_receipt_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'gdrcp_Goods_Receipt',
      'rhs_table' => 'gdrcp_goods_receipt',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'gdrcp_goods_receipt_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'gdrcp_Goods_Receipt',
      'rhs_table' => 'gdrcp_goods_receipt',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_gdrcp_goods_receipt' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'gdrcp_Goods_Receipt',
      'rhs_table' => 'gdrcp_goods_receipt',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'gdrcp_Goods_Receipt',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'gdrcp_goods_receiptpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => true,
);