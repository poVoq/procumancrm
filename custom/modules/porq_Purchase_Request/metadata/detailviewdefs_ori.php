<?php
$module_name = 'porq_Purchase_Request';
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
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createPO\';" value="{$MOD.LBL_CREATE_PO}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_PO}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'create_po_button',
                'title' => '{$MOD.LBL_CREATE_PO}',
                'onclick' => 'checkStatus();',
                'name' => 'Create PO',
              ),
            ),
          ),
          5 => 
          array (
            'customCode' => '{$CREATE_RFX_BTN}',
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
          'file' => 'modules/porq_Purchase_Request/js/detailview.js',
        ),
        1 => 
        array (
          'file' => 'cache/include/javascript/sugar_grp_yui_widgets.js',
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
      'syncDetailEditViews' => true,
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
            'name' => 'requested_for_c',
            'label' => 'LBL_REQUESTED_FOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'department_c',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTMENT',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'cost_center',
            'studio' => 'visible',
            'label' => 'LBL_COST_CENTER',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'justification',
            'studio' => 'visible',
            'label' => 'LBL_JUSTIFICATION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'total_cost',
            'label' => 'LBL_TOTAL_COST',
          ),
          1 => 
          array (
            'name' => 'date_required_c',
            'label' => 'LBL_DATE_REQUIRED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'project_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT',
          ),
          1 => 
          array (
            'name' => 'branch_c',
            'studio' => 'visible',
            'label' => 'LBL_BRANCH',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'expense_code_c',
            'label' => 'LBL_EXPENSE_CODE',
          ),
          1 => 
          array (
            'name' => 'remarks_c',
            'label' => 'LBL_REMARKS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'line_items_c',
            'studio' => 'visible',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
      ),
    ),
  ),
);
?>
