<?php
$module_name = 'Sales_Order';
$OBJECT_NAME = 'SALES_ORDER';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_SALE_NAME',
    'link' => true,
    'default' => true,
  ),
  'SUBTOTAL_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SUBTOTAL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTAL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ORDER_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ORDER_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'ORDER_EXPECTED_SHIPPING_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ORDER_EXPECTED_SHIPPING_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'ORDER_STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORDER_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALE_STAGE',
    'default' => false,
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => false,
  ),
  'NEXT_STEP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NEXT_STEP',
    'default' => false,
  ),
  'PROBABILITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PROBABILITY',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'DATE_CLOSED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'default' => false,
  ),
);
?>
