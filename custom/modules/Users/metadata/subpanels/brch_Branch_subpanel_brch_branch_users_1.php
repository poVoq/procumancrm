<?php
// created: 2016-12-30 15:51:56
$subpanel_layout['list_fields'] = array (
  'full_name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Users',
    'width' => '25%',
    'default' => true,
  ),
  'user_name' => 
  array (
    'vname' => 'LBL_LIST_USER_NAME',
    'width' => '25%',
    'default' => true,
  ),
  'reports_to_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_REPORTS_TO_NAME',
    'id' => 'REPORTS_TO_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'reports_to_id',
  ),
  'email1' => 
  array (
    'vname' => 'LBL_LIST_EMAIL',
    'width' => '25%',
    'default' => true,
  ),
  'first_name' => 
  array (
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'usage' => 'query_only',
  ),
);