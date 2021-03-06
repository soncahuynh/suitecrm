<?php
$module_name = 'Sales_Order';
$_module_name = 'sales_order';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'sales_order_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SALES_ORDER_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'id' => 'SALES_ORDER_OPPORTUNITIESOPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sales_order_opportunities_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'order_status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ORDER_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'order_status',
      ),
      'open_only' => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'order_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_ORDER_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'order_date',
      ),
      'order_expected_shipping_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_ORDER_EXPECTED_SHIPPING_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'order_expected_shipping_date',
      ),
      'order_true_shipping_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_ORDER_TRUE_SHIPPING_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'order_true_shipping_date',
      ),
      'order_status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ORDER_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'order_status',
      ),
      'lead_source' => 
      array (
        'name' => 'lead_source',
        'default' => true,
        'width' => '10%',
      ),
      'order_opportunity' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ORDER_OPPORTUNITY',
        'id' => 'OPPORTUNITY_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'order_opportunity',
      ),
      'order_account' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ORDER_ACCOUNT',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'order_account',
      ),
      'order_contact' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ORDER_CONTACT',
        'id' => 'CONTACT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'order_contact',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'sales_order_users_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SALES_ORDER_USERS_FROM_USERS_TITLE',
        'id' => 'SALES_ORDER_USERSUSERS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sales_order_users_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
