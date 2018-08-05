<?php 
 $GLOBALS["dictionary"]["Project"]=array (
  'table' => 'project',
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => false,
  'comment' => 'Project',
  'fields' => 
  array (
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_project',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'required' => true,
      'type' => 'id',
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'type' => 'assigned_user_name',
      'vname' => 'LBL_ASSIGNED_USER_ID',
      'required' => false,
      'len' => 36,
      'dbType' => 'id',
      'table' => 'users',
      'isnull' => false,
      'reportable' => true,
      'comment' => 'User assigned to this record',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED_USER_ID',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
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
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED_BY',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'comment' => 'User who created record',
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
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'required' => true,
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => 50,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'comment' => 'Project name',
      'importable' => 'required',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'required' => false,
      'type' => 'text',
      'comment' => 'Project description',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'required' => false,
      'reportable' => false,
      'default' => '0',
      'comment' => 'Record deletion indicator',
    ),
    'estimated_start_date' => 
    array (
      'name' => 'estimated_start_date',
      'vname' => 'LBL_DATE_START',
      'required' => true,
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'estimated_end_date',
        'blank' => true,
      ),
      'type' => 'date',
      'importable' => 'required',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'estimated_end_date' => 
    array (
      'name' => 'estimated_end_date',
      'vname' => 'LBL_DATE_END',
      'required' => true,
      'type' => 'date',
      'importable' => 'required',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'project_status_dom',
    ),
    'priority' => 
    array (
      'name' => 'priority',
      'vname' => 'LBL_PRIORITY',
      'type' => 'enum',
      'options' => 'projects_priority_options',
    ),
    'total_estimated_effort' => 
    array (
      'name' => 'total_estimated_effort',
      'type' => 'int',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_TOTAL_ESTIMATED_EFFORT',
    ),
    'total_actual_effort' => 
    array (
      'name' => 'total_actual_effort',
      'type' => 'int',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_TOTAL_ACTUAL_EFFORT',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'projects_accounts',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_ACCOUNTS',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'relationship' => 'projects_quotes',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_QUOTES',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'projects_contacts',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_CONTACTS',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'relationship' => 'projects_opportunities',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_OPPORTUNITIES',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'projects_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'projects_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_TASKS',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'projects_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'projects_calls',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_projects_rel',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
    ),
    'projecttask' => 
    array (
      'name' => 'projecttask',
      'type' => 'link',
      'relationship' => 'projects_project_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECT_TASKS',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'projects_created_by',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'projects_modified_user',
      'vname' => 'LBL_MODIFIED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'projects_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_USER_NAME',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'dbType' => 'varchar',
      'link' => 'users',
      'len' => '255',
      'source' => 'non-db',
    ),
    'cases' => 
    array (
      'name' => 'cases',
      'type' => 'link',
      'relationship' => 'projects_cases',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_CASES',
    ),
    'bugs' => 
    array (
      'name' => 'bugs',
      'type' => 'link',
      'relationship' => 'projects_bugs',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_BUGS',
    ),
    'products' => 
    array (
      'name' => 'products',
      'type' => 'link',
      'relationship' => 'projects_products',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_PRODUCTS',
    ),
    'project_users_1' => 
    array (
      'name' => 'project_users_1',
      'type' => 'link',
      'relationship' => 'project_users_1',
      'source' => 'non-db',
      'module' => 'Users',
      'bean_name' => 'User',
      'vname' => 'LBL_PROJECT_USERS_1_FROM_USERS_TITLE',
    ),
    'am_projecttemplates_project_1' => 
    array (
      'name' => 'am_projecttemplates_project_1',
      'type' => 'link',
      'relationship' => 'am_projecttemplates_project_1',
      'source' => 'non-db',
      'module' => 'AM_ProjectTemplates',
      'bean_name' => 'AM_ProjectTemplates',
      'vname' => 'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE',
      'id_name' => 'am_projecttemplates_project_1am_projecttemplates_ida',
    ),
    'am_projecttemplates_project_1_name' => 
    array (
      'name' => 'am_projecttemplates_project_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE',
      'save' => true,
      'id_name' => 'am_projecttemplates_project_1am_projecttemplates_ida',
      'link' => 'am_projecttemplates_project_1',
      'table' => 'am_projecttemplates',
      'module' => 'AM_ProjectTemplates',
      'rname' => 'name',
    ),
    'am_projecttemplates_project_1am_projecttemplates_ida' => 
    array (
      'name' => 'am_projecttemplates_project_1am_projecttemplates_ida',
      'type' => 'link',
      'relationship' => 'am_projecttemplates_project_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE',
    ),
    'project_contacts_1' => 
    array (
      'name' => 'project_contacts_1',
      'type' => 'link',
      'relationship' => 'project_contacts_1',
      'source' => 'non-db',
      'module' => 'Contacts',
      'bean_name' => 'Contact',
      'vname' => 'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE',
    ),
    'aos_quotes_project' => 
    array (
      'name' => 'aos_quotes_project',
      'vname' => 'LBL_AOS_QUOTES_PROJECT',
      'type' => 'link',
      'relationship' => 'aos_quotes_project',
      'source' => 'non-db',
    ),
    'override_business_hours' => 
    array (
      'name' => 'override_business_hours',
      'vname' => 'LBL_OVERRIDE_BUSINESS_HOURS',
      'type' => 'bool',
      'required' => false,
      'reportable' => false,
      'default' => '0',
      'comment' => '',
    ),
    'project_documents_1' => 
    array (
      'name' => 'project_documents_1',
      'type' => 'link',
      'relationship' => 'project_documents_1',
      'source' => 'non-db',
      'module' => 'Documents',
      'bean_name' => 'Document',
      'side' => 'right',
      'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'am_projectholidays_project' => 
    array (
      'name' => 'am_projectholidays_project',
      'type' => 'link',
      'relationship' => 'am_projectholidays_project',
      'source' => 'non-db',
      'module' => 'AM_ProjectHolidays',
      'bean_name' => 'AM_ProjectHolidays',
      'side' => 'right',
      'vname' => 'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE',
    ),
    'project_aos_contracts_1' => 
    array (
      'name' => 'project_aos_contracts_1',
      'type' => 'link',
      'relationship' => 'project_aos_contracts_1',
      'source' => 'non-db',
      'module' => 'AOS_Contracts',
      'bean_name' => 'AOS_Contracts',
      'side' => 'right',
      'vname' => 'LBL_PROJECT_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
    ),
    'project_budgt_budget_1' => 
    array (
      'name' => 'project_budgt_budget_1',
      'type' => 'link',
      'relationship' => 'project_budgt_budget_1',
      'source' => 'non-db',
      'module' => 'budgt_Budget',
      'bean_name' => 'budgt_Budget',
      'side' => 'right',
      'vname' => 'LBL_PROJECT_BUDGT_BUDGET_1_FROM_BUDGT_BUDGET_TITLE',
    ),
    'ctmr_customers_project_1' => 
    array (
      'name' => 'ctmr_customers_project_1',
      'type' => 'link',
      'relationship' => 'ctmr_customers_project_1',
      'source' => 'non-db',
      'module' => 'ctmr_Customers',
      'bean_name' => 'ctmr_Customers',
      'vname' => 'LBL_CTMR_CUSTOMERS_PROJECT_1_FROM_CTMR_CUSTOMERS_TITLE',
      'id_name' => 'ctmr_customers_project_1ctmr_customers_ida',
    ),
    'ctmr_customers_project_1_name' => 
    array (
      'name' => 'ctmr_customers_project_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_CTMR_CUSTOMERS_PROJECT_1_FROM_CTMR_CUSTOMERS_TITLE',
      'save' => true,
      'id_name' => 'ctmr_customers_project_1ctmr_customers_ida',
      'link' => 'ctmr_customers_project_1',
      'table' => 'ctmr_customers',
      'module' => 'ctmr_Customers',
      'rname' => 'name',
    ),
    'ctmr_customers_project_1ctmr_customers_ida' => 
    array (
      'name' => 'ctmr_customers_project_1ctmr_customers_ida',
      'type' => 'link',
      'relationship' => 'ctmr_customers_project_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_CTMR_CUSTOMERS_PROJECT_1_FROM_PROJECT_TITLE',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'projects_primary_key_index',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'securitygroups_project' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_notes' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_tasks' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_meetings' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_calls' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_emails' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_project_tasks' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'ProjectTask',
      'rhs_table' => 'project_task',
      'rhs_key' => 'project_id',
      'relationship_type' => 'one-to-many',
    ),
    'projects_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'projects_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'projects_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
  ),
  'custom_fields' => false,
);