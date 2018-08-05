<?php 
 $GLOBALS["dictionary"]["AOS_Products"]=array (
  'table' => 'aos_products',
  'audited' => true,
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
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
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
      'relationship' => 'aos_products_created_by',
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
      'relationship' => 'aos_products_modified_user',
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
      'relationship' => 'aos_products_assigned_user',
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
      'relationship' => 'securitygroups_aos_products',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'aos_products_purchases' => 
    array (
      'name' => 'aos_products_purchases',
      'type' => 'link',
      'relationship' => 'aos_products_purchases',
      'source' => 'non-db',
      'module' => 'AOS_Quotes',
      'bean_name' => 'AOS_Quotes',
      'vname' => 'LBL_PRODUCTS_PURCHASES',
    ),
    'maincode' => 
    array (
      'required' => '0',
      'name' => 'maincode',
      'vname' => 'LBL_MAINCODE',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'XXXX',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => 100,
      'options' => 'product_code_dom',
      'studio' => 'visible',
    ),
    'part_number' => 
    array (
      'required' => false,
      'name' => 'part_number',
      'vname' => 'LBL_PART_NUMBER',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '25',
    ),
    'category' => 
    array (
      'required' => false,
      'name' => 'category',
      'vname' => 'LBL_CATEGORY',
      'type' => 'enum',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => true,
      'len' => 100,
      'options' => 'product_category_dom',
      'studio' => 'visible',
    ),
    'type' => 
    array (
      'required' => false,
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Good',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => 100,
      'options' => 'product_type_dom',
      'studio' => 'visible',
    ),
    'cost' => 
    array (
      'required' => '0',
      'name' => 'cost',
      'vname' => 'LBL_COST',
      'type' => 'currency',
      'len' => '26,6',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'enable_range_search' => true,
      'options' => 'numeric_range_search_dom',
    ),
    'cost_usdollar' => 
    array (
      'required' => '0',
      'name' => 'cost_usdollar',
      'vname' => 'LBL_COST_USDOLLAR',
      'type' => 'currency',
      'group' => 'cost',
      'len' => '26,6',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
    ),
    'currency_id' => 
    array (
      'required' => false,
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 0,
      'len' => 36,
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
    ),
    'price' => 
    array (
      'required' => true,
      'name' => 'price',
      'vname' => 'LBL_PRICE',
      'type' => 'currency',
      'len' => '26,6',
      'massupdate' => 0,
      'comments' => 'excl VAT',
      'help' => 'excl VAT',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'enable_range_search' => true,
      'options' => 'numeric_range_search_dom',
      'inline_edit' => true,
      'merge_filter' => 'disabled',
    ),
    'price_usdollar' => 
    array (
      'name' => 'price_usdollar',
      'vname' => 'LBL_PRICE_USDOLLAR',
      'type' => 'currency',
      'disable_num_format' => true,
      'group' => 'price',
      'duplicate_merge' => 'disabled',
      'audited' => true,
      'comment' => '',
      'studio' => 
      array (
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
      'len' => '26,6',
      'inline_edit' => true,
      'duplicate_merge_dom_value' => '0',
      'merge_filter' => 'disabled',
      'enable_range_search' => false,
    ),
    'url' => 
    array (
      'required' => false,
      'name' => 'url',
      'vname' => 'LBL_URL',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '255',
    ),
    'contact_id' => 
    array (
      'required' => false,
      'name' => 'contact_id',
      'vname' => '',
      'type' => 'id',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 0,
      'len' => 36,
    ),
    'contact' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'contact',
      'vname' => 'LBL_CONTACT',
      'type' => 'relate',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '255',
      'id_name' => 'contact_id',
      'ext2' => 'Contacts',
      'module' => 'Contacts',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'product_image' => 
    array (
      'name' => 'product_image',
      'vname' => 'LBL_PRODUCT_IMAGE',
      'type' => 'varchar',
      'len' => '255',
      'reportable' => true,
      'comment' => 'File name associated with the note (attachment)',
      'inline_edit' => true,
      'comments' => 'File name associated with the note (attachment)',
      'merge_filter' => 'disabled',
    ),
    'file_url' => 
    array (
      'name' => 'file_url',
      'vname' => 'LBL_FILE_URL',
      'type' => 'function',
      'function_require' => 'include/upload_file.php',
      'function_class' => 'UploadFile',
      'function_name' => 'get_url',
      'function_params' => 
      array (
        0 => 'filename',
        1 => 'id',
      ),
      'source' => 'function',
      'reportable' => false,
      'comment' => 'Path to file (can be URL)',
    ),
    'aos_product_category' => 
    array (
      'name' => 'aos_product_category',
      'type' => 'link',
      'relationship' => 'product_categories',
      'source' => 'non-db',
      'link_type' => 'one',
      'module' => 'AOS_Product_Categories',
      'bean_name' => 'AOS_Product_Categories',
      'vname' => 'LBL_AOS_PRODUCT_CATEGORIES',
    ),
    'aos_product_category_name' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'aos_product_category_name',
      'vname' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
      'type' => 'relate',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 1,
      'reportable' => true,
      'len' => '255',
      'id_name' => 'aos_product_category_id',
      'ext2' => 'AOS_Product_Categories',
      'module' => 'AOS_Product_Categories',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'aos_product_category_id' => 
    array (
      'name' => 'aos_product_category_id',
      'type' => 'id',
      'reportable' => false,
      'vname' => 'LBL_AOS_PRODUCT_CATEGORY',
    ),
    'trade_license_expiry_date_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Trade License Expiry Date',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'trade_license_expiry_date_c',
      'vname' => 'LBL_TRADE_LICENSE_EXPIRY_DATE',
      'type' => 'date',
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
      'size' => '20',
      'enable_range_search' => false,
      'id' => 'AOS_Productstrade_license_expiry_date_c',
      'custom_module' => 'AOS_Products',
    ),
    'is_preferred_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Is Preferred',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'is_preferred_c',
      'vname' => 'LBL_IS_PREFERRED',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '0',
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
      'id' => 'AOS_Productsis_preferred_c',
      'custom_module' => 'AOS_Products',
    ),
    'internal_item_code_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Internal Item Code',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'internal_item_code_c',
      'vname' => 'LBL_INTERNAL_ITEM_CODE',
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
      'len' => '100',
      'size' => '20',
      'id' => 'AOS_Productsinternal_item_code_c',
      'custom_module' => 'AOS_Products',
    ),
    'accounts_aos_products_1' => 
    array (
      'name' => 'accounts_aos_products_1',
      'type' => 'link',
      'relationship' => 'accounts_aos_products_1',
      'source' => 'non-db',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
      'id_name' => 'accounts_aos_products_1accounts_ida',
    ),
    'accounts_aos_products_1_name' => 
    array (
      'name' => 'accounts_aos_products_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
      'save' => true,
      'id_name' => 'accounts_aos_products_1accounts_ida',
      'link' => 'accounts_aos_products_1',
      'table' => 'accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'required' => true,
    ),
    'accounts_aos_products_1accounts_ida' => 
    array (
      'name' => 'accounts_aos_products_1accounts_ida',
      'type' => 'link',
      'relationship' => 'accounts_aos_products_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
    ),
    'reorder_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Re-Order Level',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'reorder_c',
      'vname' => 'LBL_REORDER',
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
      'id' => 'AOS_Productsreorder_c',
      'custom_module' => 'AOS_Products',
    ),
    'brand_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Brand',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'brand_c',
      'vname' => 'LBL_BRAND_C',
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
      'id' => 'AOS_Productsbrand_c',
      'custom_module' => 'AOS_Products',
    ),
    'in_stock_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Available in Stock',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'in_stock_c',
      'vname' => 'LBL_IN_STOCK',
      'type' => 'float',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '8',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
      'id' => 'AOS_Productsin_stock_c',
      'custom_module' => 'AOS_Products',
    ),
    'dimensions_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Dimensions',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'dimensions_c',
      'vname' => 'LBL_DIMENSIONS',
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
      'id' => 'AOS_Productsdimensions_c',
      'custom_module' => 'AOS_Products',
    ),
    'unit_of_measure_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'UOM',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'unit_of_measure_c',
      'vname' => 'LBL_UNIT_OF_MEASURE',
      'type' => 'enum',
      'massupdate' => '0',
      'default' => '1',
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
      'len' => 100,
      'size' => '20',
      'options' => 'unit_of_measure_list',
      'studio' => 'visible',
      'dependency' => NULL,
      'id' => 'AOS_Productsunit_of_measure_c',
      'custom_module' => 'AOS_Products',
    ),
    'sales_unit_size_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Sales Unit Size',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'sales_unit_size_c',
      'vname' => 'LBL_SALES_UNIT_SIZE',
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
      'id' => 'AOS_Productssales_unit_size_c',
      'custom_module' => 'AOS_Products',
    ),
    'supplier_name_c' => 
    array (
      'name' => 'supplier_name_c',
      'vname' => 'LBL_SUPPLIER_NAME_C',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'required' => false,
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'inline_edit' => true,
    ),
    'aos_products_documents_1' => 
    array (
      'name' => 'aos_products_documents_1',
      'type' => 'link',
      'relationship' => 'aos_products_documents_1',
      'source' => 'non-db',
      'module' => 'Documents',
      'bean_name' => 'Document',
      'side' => 'right',
      'vname' => 'LBL_AOS_PRODUCTS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'moq_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Min Order Qty',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'moq_c',
      'vname' => 'LBL_MOQ',
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
      'id' => 'AOS_Productsmoq_c',
      'custom_module' => 'AOS_Products',
    ),
    'aos_contracts_id_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'aos_contracts_id_c',
      'vname' => 'LBL_CONTRACT_AOS_CONTRACTS_ID',
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
      'id' => 'AOS_Productsaos_contracts_id_c',
      'custom_module' => 'AOS_Products',
    ),
    'aos_products_stkwd_stock_withdrawal_1' => 
    array (
      'name' => 'aos_products_stkwd_stock_withdrawal_1',
      'type' => 'link',
      'relationship' => 'aos_products_stkwd_stock_withdrawal_1',
      'source' => 'non-db',
      'module' => 'stkwd_stock_withdrawal',
      'bean_name' => 'stkwd_stock_withdrawal',
      'side' => 'right',
      'vname' => 'LBL_AOS_PRODUCTS_STKWD_STOCK_WITHDRAWAL_1_FROM_STKWD_STOCK_WITHDRAWAL_TITLE',
    ),
    'mapol_master_product_list_aos_products_1' => 
    array (
      'name' => 'mapol_master_product_list_aos_products_1',
      'type' => 'link',
      'relationship' => 'mapol_master_product_list_aos_products_1',
      'source' => 'non-db',
      'module' => 'mapol_master_product_list',
      'bean_name' => 'mapol_master_product_list',
      'vname' => 'LBL_MAPOL_MASTER_PRODUCT_LIST_AOS_PRODUCTS_1_FROM_MAPOL_MASTER_PRODUCT_LIST_TITLE',
      'id_name' => 'mapol_mast4e8ect_list_ida',
    ),
    'mapol_master_product_list_aos_products_1_name' => 
    array (
      'name' => 'mapol_master_product_list_aos_products_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_MAPOL_MASTER_PRODUCT_LIST_AOS_PRODUCTS_1_FROM_MAPOL_MASTER_PRODUCT_LIST_TITLE',
      'save' => true,
      'id_name' => 'mapol_mast4e8ect_list_ida',
      'link' => 'mapol_master_product_list_aos_products_1',
      'table' => 'mapol_master_product_list',
      'module' => 'mapol_master_product_list',
      'rname' => 'name',
    ),
    'mapol_mast4e8ect_list_ida' => 
    array (
      'name' => 'mapol_mast4e8ect_list_ida',
      'type' => 'link',
      'relationship' => 'mapol_master_product_list_aos_products_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_MAPOL_MASTER_PRODUCT_LIST_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
    ),
    'product_pic_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Product Image',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'product_pic_c',
      'vname' => 'LBL_PRODUCT_PIC',
      'type' => 'image',
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
      'len' => 255,
      'size' => '20',
      'studio' => 'visible',
      'dbType' => 'varchar',
      'border' => '',
      'width' => '120',
      'height' => '',
      'id' => 'AOS_Productsproduct_pic_c',
      'custom_module' => 'AOS_Products',
    ),
    'price_valid_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Price Valid Until',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'price_valid_c',
      'vname' => 'LBL_PRICE_VALID',
      'type' => 'date',
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
      'size' => '20',
      'enable_range_search' => false,
      'id' => 'AOS_Productsprice_valid_c',
      'custom_module' => 'AOS_Products',
    ),
    'contract_c' => 
    array (
      'inline_edit' => '',
      'labelValue' => 'Contract',
      'required' => false,
      'source' => 'non-db',
      'name' => 'contract_c',
      'vname' => 'LBL_CONTRACT',
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
      'id_name' => 'aos_contracts_id_c',
      'ext2' => 'AOS_Contracts',
      'module' => 'AOS_Contracts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'AOS_Productscontract_c',
      'custom_module' => 'AOS_Products',
    ),
    'account_id_c' => 
    array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'account_id_c',
      'vname' => 'LBL_VENDOR_REF_ACCOUNT_ID',
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
      'inline_edit' => true,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'AOS_Productsaccount_id_c',
      'custom_module' => 'AOS_Products',
    ),
    'vendor_ref_c' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'vendor_ref_c',
      'vname' => 'LBL_VENDOR_REF',
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
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'account_id_c',
      'ext2' => 'Accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'AOS_Productsvendor_ref_c',
      'custom_module' => 'AOS_Products',
    ),
  ),
  'relationships' => 
  array (
    'aos_products_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'aos_products_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'aos_products_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_aos_products' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'AOS_Products',
    ),
    'product_categories' => 
    array (
      'lhs_module' => 'AOS_Product_Categories',
      'lhs_table' => 'aos_product_categories',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'aos_product_category_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_lock' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'aos_productspk',
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