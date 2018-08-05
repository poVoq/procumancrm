<?php
// created: 2018-07-13 10:15:08
$viewdefs['Documents']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'enctype' => 'multipart/form-data',
      'hidden' => 
      array (
        0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
        1 => '<input type="hidden" name="contract_id" value="{$smarty.request.contract_id}">',
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
    'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
{sugar_getscript file="modules/Documents/documents.js"}',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_DOCUMENT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'lbl_document_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'filename',
          'displayParams' => 
          array (
            'onchangeSetFileNameTo' => 'document_name',
          ),
        ),
        1 => 
        array (
          'name' => 'status_id',
          'label' => 'LBL_DOC_STATUS',
        ),
      ),
      1 => 
      array (
        0 => 'document_name',
        1 => 
        array (
          'name' => 'revision',
          'customCode' => '<input name="revision" type="text" value="{$fields.revision.value}" {$DISABLED}>',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'template_type',
          'label' => 'LBL_DET_TEMPLATE_TYPE',
        ),
        1 => '',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'active_date',
        ),
        1 => 'exp_date',
      ),
      4 => 
      array (
        0 => 'category_id',
        1 => 'subcategory_id',
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'description',
        ),
        1 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'public_url_c',
          'label' => 'LBL_PUBLIC_URL',
        ),
        1 => '',
      ),
      7 => 
      array (
        0 => '',
        1 => '',
      ),
    ),
  ),
);