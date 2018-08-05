<?php 
 $GLOBALS["dictionary"]["pay_payments"]=array (
  'table' => 'pay_payments',
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
        'boost' => 3,
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
      'inline_edit' => true,
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
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'pay_payments_created_by',
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
      'relationship' => 'pay_payments_modified_user',
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
      'relationship' => 'pay_payments_assigned_user',
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
      'relationship' => 'securitygroups_pay_payments',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'payment_id' => 
    array (
      'required' => false,
      'name' => 'payment_id',
      'vname' => 'LBL_PAYMENT_ID',
      'type' => 'autoincrement',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 80,
      'size' => '20',
      'dbType' => 'varchar',
      'format' => '{PAY}{-}{y}{-}{0000}{}{}',
      'start_number' => '0001',
    ),
    'payment_type' => 
    array (
      'required' => false,
      'name' => 'payment_type',
      'vname' => 'LBL_PAYMENT_TYPE',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '4',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'payment_type_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'requested_amount' => 
    array (
      'required' => false,
      'name' => 'requested_amount',
      'vname' => 'LBL_REQUESTED_AMOUNT',
      'type' => 'currency',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
    ),
    'currency_id' => 
    array (
      'required' => false,
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'currency_id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
      'dbType' => 'id',
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
    ),
    'approved_amount' => 
    array (
      'required' => false,
      'name' => 'approved_amount',
      'vname' => 'LBL_APPROVED_AMOUNT',
      'type' => 'currency',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
    ),
    'payment_date' => 
    array (
      'required' => false,
      'name' => 'payment_date',
      'vname' => 'LBL_PAYMENT_DATE',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
    ),
    'payment_status' => 
    array (
      'required' => false,
      'name' => 'payment_status',
      'vname' => 'LBL_PAYMENT_STATUS',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'payment_status_list',
      'studio' => 'visible',
      'dependency' => false,
      'default' => '2',
    ),
    'request_remarks' => 
    array (
      'required' => false,
      'name' => 'request_remarks',
      'vname' => 'LBL_REQUEST_REMARKS',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '3',
      'cols' => '20',
    ),
    'payment_remarks' => 
    array (
      'required' => false,
      'name' => 'payment_remarks',
      'vname' => 'LBL_PAYMENT_REMARKS',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '3',
      'cols' => '80',
    ),
    'reinv_invoices_received_pay_payments_1' => 
    array (
      'name' => 'reinv_invoices_received_pay_payments_1',
      'type' => 'link',
      'relationship' => 'reinv_invoices_received_pay_payments_1',
      'source' => 'non-db',
      'module' => 'reinv_Invoices_Received',
      'bean_name' => 'reinv_Invoices_Received',
      'vname' => 'LBL_REINV_INVOICES_RECEIVED_PAY_PAYMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
      'id_name' => 'reinv_invod260eceived_ida',
    ),
    'reinv_invoices_received_pay_payments_1_name' => 
    array (
      'name' => 'reinv_invoices_received_pay_payments_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_REINV_INVOICES_RECEIVED_PAY_PAYMENTS_1_FROM_REINV_INVOICES_RECEIVED_TITLE',
      'save' => true,
      'id_name' => 'reinv_invod260eceived_ida',
      'link' => 'reinv_invoices_received_pay_payments_1',
      'table' => 'reinv_invoices_received',
      'module' => 'reinv_Invoices_Received',
      'rname' => 'name',
    ),
    'reinv_invod260eceived_ida' => 
    array (
      'name' => 'reinv_invod260eceived_ida',
      'type' => 'link',
      'relationship' => 'reinv_invoices_received_pay_payments_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_REINV_INVOICES_RECEIVED_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
    ),
    'aos_quotes_pay_payments_1' => 
    array (
      'name' => 'aos_quotes_pay_payments_1',
      'type' => 'link',
      'relationship' => 'aos_quotes_pay_payments_1',
      'source' => 'non-db',
      'module' => 'AOS_Quotes',
      'bean_name' => 'AOS_Quotes',
      'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_AOS_QUOTES_TITLE',
      'id_name' => 'aos_quotes_pay_payments_1aos_quotes_ida',
    ),
    'aos_quotes_pay_payments_1_name' => 
    array (
      'name' => 'aos_quotes_pay_payments_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_AOS_QUOTES_TITLE',
      'save' => true,
      'id_name' => 'aos_quotes_pay_payments_1aos_quotes_ida',
      'link' => 'aos_quotes_pay_payments_1',
      'table' => 'aos_quotes',
      'module' => 'AOS_Quotes',
      'rname' => 'name',
    ),
    'aos_quotes_pay_payments_1aos_quotes_ida' => 
    array (
      'name' => 'aos_quotes_pay_payments_1aos_quotes_ida',
      'type' => 'link',
      'relationship' => 'aos_quotes_pay_payments_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AOS_QUOTES_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
    ),
    'porq_purchase_request_pay_payments_1' => 
    array (
      'name' => 'porq_purchase_request_pay_payments_1',
      'type' => 'link',
      'relationship' => 'porq_purchase_request_pay_payments_1',
      'source' => 'non-db',
      'module' => 'porq_Purchase_Request',
      'bean_name' => 'porq_Purchase_Request',
      'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PAY_PAYMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
      'id_name' => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
    ),
    'porq_purchase_request_pay_payments_1_name' => 
    array (
      'name' => 'porq_purchase_request_pay_payments_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PAY_PAYMENTS_1_FROM_PORQ_PURCHASE_REQUEST_TITLE',
      'save' => true,
      'id_name' => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
      'link' => 'porq_purchase_request_pay_payments_1',
      'table' => 'porq_purchase_request',
      'module' => 'porq_Purchase_Request',
      'rname' => 'name',
    ),
    'porq_purchase_request_pay_payments_1porq_purchase_request_ida' => 
    array (
      'name' => 'porq_purchase_request_pay_payments_1porq_purchase_request_ida',
      'type' => 'link',
      'relationship' => 'porq_purchase_request_pay_payments_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'pay_payments_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pay_payments',
      'rhs_table' => 'pay_payments',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'pay_payments_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pay_payments',
      'rhs_table' => 'pay_payments',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'pay_payments_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pay_payments',
      'rhs_table' => 'pay_payments',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_pay_payments' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'pay_payments',
      'rhs_table' => 'pay_payments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'pay_payments',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'pay_paymentspk',
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
  'custom_fields' => false,
);