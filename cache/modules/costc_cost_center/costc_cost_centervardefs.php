<?php 
 $GLOBALS["dictionary"]["costc_cost_center"]=array (
  'table' => 'costc_cost_center',
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
      'len' => '50',
      'unified_search' => false,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
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
      'relationship' => 'costc_cost_center_created_by',
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
      'relationship' => 'costc_cost_center_modified_user',
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
      'relationship' => 'costc_cost_center_assigned_user',
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
    'dprt_departments_costc_cost_center' => 
    array (
      'name' => 'dprt_departments_costc_cost_center',
      'type' => 'link',
      'relationship' => 'dprt_departments_costc_cost_center',
      'source' => 'non-db',
      'module' => 'dprt_Departments',
      'bean_name' => false,
      'vname' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_DPRT_DEPARTMENTS_TITLE',
      'id_name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
    ),
    'dprt_departments_costc_cost_center_name' => 
    array (
      'name' => 'dprt_departments_costc_cost_center_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_DPRT_DEPARTMENTS_TITLE',
      'save' => true,
      'id_name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
      'link' => 'dprt_departments_costc_cost_center',
      'table' => 'dprt_departments',
      'module' => 'dprt_Departments',
      'rname' => 'name',
    ),
    'dprt_departments_costc_cost_centerdprt_departments_ida' => 
    array (
      'name' => 'dprt_departments_costc_cost_centerdprt_departments_ida',
      'type' => 'link',
      'relationship' => 'dprt_departments_costc_cost_center',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_DPRT_DEPARTMENTS_COSTC_COST_CENTER_FROM_COSTC_COST_CENTER_TITLE',
    ),
    'branch_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Branch',
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
      'id' => 'costc_cost_centerbranch_c',
      'custom_module' => 'costc_cost_center',
    ),
    'costc_cost_center_budgt_budget_1' => 
    array (
      'name' => 'costc_cost_center_budgt_budget_1',
      'type' => 'link',
      'relationship' => 'costc_cost_center_budgt_budget_1',
      'source' => 'non-db',
      'module' => 'budgt_Budget',
      'bean_name' => 'budgt_Budget',
      'side' => 'right',
      'vname' => 'LBL_COSTC_COST_CENTER_BUDGT_BUDGET_1_FROM_BUDGT_BUDGET_TITLE',
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
      'id' => 'costc_cost_centerbrch_branch_id_c',
      'custom_module' => 'costc_cost_center',
    ),
    'costc_cost_center_aos_quotes_1' => 
    array (
      'name' => 'costc_cost_center_aos_quotes_1',
      'type' => 'link',
      'relationship' => 'costc_cost_center_aos_quotes_1',
      'source' => 'non-db',
      'module' => 'AOS_Quotes',
      'bean_name' => 'AOS_Quotes',
      'side' => 'right',
      'vname' => 'LBL_COSTC_COST_CENTER_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'costc_cost_center_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'costc_cost_center',
      'rhs_table' => 'costc_cost_center',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'costc_cost_center_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'costc_cost_center',
      'rhs_table' => 'costc_cost_center',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'costc_cost_center_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'costc_cost_center',
      'rhs_table' => 'costc_cost_center',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'costc_cost_centerpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => true,
);