<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-01-01 17:54:31
$layout_defs["Opportunities"]["subpanel_setup"]['sales_order_opportunities'] = array (
  'order' => 100,
  'module' => 'Sales_Order',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SALES_ORDER_OPPORTUNITIES_FROM_SALES_ORDER_TITLE',
  'get_subpanel_data' => 'sales_order_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>