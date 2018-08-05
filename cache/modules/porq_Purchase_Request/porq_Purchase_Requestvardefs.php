<?php 
 $GLOBALS["dictionary"]["porq_Purchase_Request"]=array (
  'table' => 'porq_purchase_request',
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
      'len' => '60',
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
      'rows' => '2',
      'cols' => '30',
      'required' => true,
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
      'relationship' => 'porq_purchase_request_created_by',
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
      'relationship' => 'porq_purchase_request_modified_user',
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
      'help' => 'Assign to yourself to keep it as draft',
      'required' => true,
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'porq_purchase_request_assigned_user',
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
      'relationship' => 'securitygroups_porq_purchase_request',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'justification' => 
    array (
      'required' => false,
      'name' => 'justification',
      'vname' => 'LBL_JUSTIFICATION',
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
      'rows' => '2',
      'cols' => '30',
    ),
    'costc_cost_center_id_c' => 
    array (
      'required' => false,
      'name' => 'costc_cost_center_id_c',
      'vname' => 'LBL_COST_CENTER_COSTC_COST_CENTER_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'cost_center' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'cost_center',
      'vname' => 'LBL_COST_CENTER',
      'type' => 'relate',
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
      'len' => '255',
      'size' => '20',
      'id_name' => 'costc_cost_center_id_c',
      'ext2' => 'costc_cost_center',
      'module' => 'costc_cost_center',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'status' => 
    array (
      'required' => false,
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
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
      'len' => 100,
      'size' => '20',
      'options' => 'PO_req_status',
      'studio' => 'visible',
      'dependency' => false,
      'default' => '0',
    ),
    'total_cost' => 
    array (
      'inline_edit' => '',
      'name' => 'total_cost',
      'vname' => 'LBL_TOTAL_COST',
      'required' => false,
      'type' => 'currency',
      'massupdate' => '0',
      'default' => '0.00',
      'no_default' => false,
      'comments' => '',
      'help' => 'Total for all items in default currency',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '26',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 2,
    ),
    'aos_quotes_porq_purchase_request_1' => 
    array (
      'name' => 'aos_quotes_porq_purchase_request_1',
      'type' => 'link',
      'relationship' => 'aos_quotes_porq_purchase_request_1',
      'source' => 'non-db',
      'module' => 'AOS_Quotes',
      'bean_name' => 'AOS_Quotes',
      'vname' => 'LBL_AOS_QUOTES_PORQ_PURCHASE_REQUEST_1_FROM_AOS_QUOTES_TITLE',
    ),
    'branch_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Company Code',
      'required' => false,
      'source' => 'non-db',
      'name' => 'branch_c',
      'vname' => 'LBL_BRANCH',
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
      'id_name' => 'brch_branch_id_c',
      'ext2' => 'brch_Branch',
      'module' => 'brch_Branch',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'porq_Purchase_Requestbranch_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'project_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Project',
      'required' => false,
      'source' => 'non-db',
      'name' => 'project_c',
      'vname' => 'LBL_PROJECT',
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
      'id_name' => 'project_id_c',
      'ext2' => 'Project',
      'module' => 'Project',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'porq_Purchase_Requestproject_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'project_id_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'project_id_c',
      'vname' => 'LBL_PROJECT_PROJECT_ID',
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
      'id' => 'porq_Purchase_Requestproject_id_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'dprt_departments_id_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'dprt_departments_id_c',
      'vname' => 'LBL_DEPARTMENT_DPRT_DEPARTMENTS_ID',
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
      'id' => 'porq_Purchase_Requestdprt_departments_id_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'expense_code_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Expense Code',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'expense_code_c',
      'vname' => 'LBL_EXPENSE_CODE',
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
      'len' => '50',
      'size' => '20',
      'id' => 'porq_Purchase_Requestexpense_code_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'date_required_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Delivery Date',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'date_required_c',
      'vname' => 'LBL_DATE_REQUIRED',
      'type' => 'date',
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
      'size' => '20',
      'enable_range_search' => false,
      'id' => 'porq_Purchase_Requestdate_required_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'request_id_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Requisition ID',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'request_id_c',
      'vname' => 'LBL_REQUEST_ID',
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
      'format' => '{REQ}{}{}{}{0000}{}{}',
      'start_number' => '0001',
      'id' => 'porq_Purchase_Requestrequest_id_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'porq_po_request_appr_approvals' => 
    array (
      'name' => 'porq_po_request_appr_approvals',
      'type' => 'link',
      'relationship' => 'porq_po_request_appr_approvals',
      'source' => 'non-db',
      'module' => 'appr_Approvals',
      'bean_name' => 'appr_Approvals',
      'side' => 'right',
      'vname' => 'LBL_PORQ_PO_REQUEST_APPR_APPROVALS_FROM_APPR_APPROVALS_TITLE',
    ),
    'remarks_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Remarks',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'remarks_c',
      'vname' => 'LBL_REMARKS',
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
      'len' => '255',
      'size' => '20',
      'id' => 'porq_Purchase_Requestremarks_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'requested_for_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Requested for',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'requested_for_c',
      'vname' => 'LBL_REQUESTED_FOR',
      'type' => 'varchar',
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
      'id' => 'porq_Purchase_Requestrequested_for_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'department_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Department',
      'required' => false,
      'source' => 'non-db',
      'name' => 'department_c',
      'vname' => 'LBL_DEPARTMENT',
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
      'id_name' => 'dprt_departments_id_c',
      'ext2' => 'dprt_Departments',
      'module' => 'dprt_Departments',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'porq_Purchase_Requestdepartment_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'porq_purchase_request_porq_purchase_request_lines_1' => 
    array (
      'name' => 'porq_purchase_request_porq_purchase_request_lines_1',
      'type' => 'link',
      'relationship' => 'porq_purchase_request_porq_purchase_request_lines_1',
      'source' => 'non-db',
      'module' => 'porq_Purchase_Request_Lines',
      'bean_name' => 'porq_Purchase_Request_Lines',
      'side' => 'right',
      'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PORQ_PURCHASE_REQUEST_LINES_1_FROM_PORQ_PURCHASE_REQUEST_LINES_TITLE',
    ),
    'brch_branch_id_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'brch_branch_id_c',
      'vname' => 'LBL_BRANCH_BRCH_BRANCH_ID',
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
      'id' => 'porq_Purchase_Requestbrch_branch_id_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
    'porq_purchase_request_documents_1' => 
    array (
      'name' => 'porq_purchase_request_documents_1',
      'type' => 'link',
      'relationship' => 'porq_purchase_request_documents_1',
      'source' => 'non-db',
      'module' => 'Documents',
      'bean_name' => 'Document',
      'side' => 'right',
      'vname' => 'LBL_PORQ_PURCHASE_REQUEST_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'porq_purchase_request_pay_payments_1' => 
    array (
      'name' => 'porq_purchase_request_pay_payments_1',
      'type' => 'link',
      'relationship' => 'porq_purchase_request_pay_payments_1',
      'source' => 'non-db',
      'module' => 'pay_payments',
      'bean_name' => 'pay_payments',
      'side' => 'right',
      'vname' => 'LBL_PORQ_PURCHASE_REQUEST_PAY_PAYMENTS_1_FROM_PAY_PAYMENTS_TITLE',
    ),
    'line_items_c' => 
    array (
      'inline_edit' => 1,
      'labelValue' => 'Line Items',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'line_items_c',
      'vname' => 'LBL_LINE_ITEMS',
      'type' => 'multi_lines',
      'massupdate' => 0,
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 0,
      'duplicate_merge' => 0,
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => 0,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'dbType' => 'text',
      'studio' => 'visible',
      'id' => 'porq_Purchase_Requestline_items_c',
      'custom_module' => 'porq_Purchase_Request',
    ),
  ),
  'relationships' => 
  array (
    'porq_purchase_request_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'porq_Purchase_Request',
      'rhs_table' => 'porq_purchase_request',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'porq_purchase_request_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'porq_Purchase_Request',
      'rhs_table' => 'porq_purchase_request',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'porq_purchase_request_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'porq_Purchase_Request',
      'rhs_table' => 'porq_purchase_request',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_porq_purchase_request' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'porq_Purchase_Request',
      'rhs_table' => 'porq_purchase_request',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'porq_Purchase_Request',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'porq_purchase_requestpk',
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