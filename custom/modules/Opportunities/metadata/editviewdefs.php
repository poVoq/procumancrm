<?php
// created: 2018-07-13 10:15:08
$viewdefs['Opportunities']['EditView'] = array (
  'templateMeta' => 
  array (
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
    'javascript' => '{$PROBABILITY_SCRIPT}',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => false,
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
        ),
        1 => 'account_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'date_closed',
        ),
        1 => 'opportunity_type',
      ),
      2 => 
      array (
        0 => 'next_step',
        1 => 'campaign_name',
      ),
      3 => 
      array (
        0 => 'description',
        1 => 'assigned_user_name',
      ),
    ),
  ),
);