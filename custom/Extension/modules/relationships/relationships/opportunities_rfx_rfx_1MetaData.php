<?php
// created: 2016-02-12 14:30:25
$dictionary["opportunities_rfx_rfx_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_rfx_rfx_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'RFX_RFx',
      'rhs_table' => 'rfx_rfx',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_rfx_rfx_1_c',
      'join_key_lhs' => 'opportunities_rfx_rfx_1opportunities_ida',
      'join_key_rhs' => 'opportunities_rfx_rfx_1rfx_rfx_idb',
    ),
  ),
  'table' => 'opportunities_rfx_rfx_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'opportunities_rfx_rfx_1opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_rfx_rfx_1rfx_rfx_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_rfx_rfx_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_rfx_rfx_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_rfx_rfx_1opportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_rfx_rfx_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_rfx_rfx_1rfx_rfx_idb',
      ),
    ),
  ),
);