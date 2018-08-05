<?php
// created: 2018-07-13 10:15:08
$viewdefs['Documents']['DetailView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
      ),
    ),
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
            'link' => 'filename',
            'id' => 'document_revision_id',
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
        0 => 
        array (
          'name' => 'document_name',
          'label' => 'LBL_DOC_NAME',
        ),
        1 => 
        array (
          'name' => 'revision',
          'label' => 'LBL_DOC_VERSION',
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
        0 => 'active_date',
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
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
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