<?php
// created: 2017-01-01 17:54:31
$dictionary["sales_order_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sales_order_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Sales_Order',
      'rhs_table' => 'sales_order',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sales_order_accounts_c',
      'join_key_lhs' => 'sales_order_accountsaccounts_ida',
      'join_key_rhs' => 'sales_order_accountssales_order_idb',
    ),
  ),
  'table' => 'sales_order_accounts_c',
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
      'name' => 'sales_order_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sales_order_accountssales_order_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sales_order_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sales_order_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sales_order_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sales_order_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sales_order_accountssales_order_idb',
      ),
    ),
  ),
);