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
          1 => 'EDIT',
          2 => 'DUPLICATE',
          3 => 'DELETE',
          5 => 
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
          6 => 
          array (
            'customCode' => '{$CREATE_RFX_BTN}',
          ),
          7 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_GENERATE_LETTER}">',
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
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'justification',
            'studio' => 'visible',
            'label' => 'LBL_JUSTIFICATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'request_background_c',
            'studio' => 'visible',
            'label' => 'LBL_REQUEST_BACKGROUND',
          ),
          1 => 
          array (
            'name' => 'total_cost',
            'label' => 'LBL_TOTAL_COST',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'request_area_c',
            'studio' => 'visible',
            'label' => 'LBL_REQUEST_AREA',
          ),
          1 => 
          array (
            'name' => 'department_c',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTMENT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'branch_c',
            'studio' => 'visible',
            'label' => 'LBL_BRANCH',
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
            'name' => 'po_type_c',
            'studio' => 'visible',
            'label' => 'LBL_PO_TYPE',
          ),
          1 => 
          array (
            'name' => 'section_c',
            'label' => 'LBL_SECTION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'business_area_c',
            'label' => 'LBL_BUSINESS_AREA',
          ),
          1 => 
          array (
            'name' => 'asset_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_TYPE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
            'customCode' => '{$fields.date_entered.value}',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'alert_message_c',
            'label' => 'LBL_ALERT_MESSAGE',
          ),
          1 => 
          array (
            'name' => 'remarks_c',
            'label' => 'LBL_REMARKS',
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
;
?>
