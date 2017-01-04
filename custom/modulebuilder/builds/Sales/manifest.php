<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'Sales',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Sales',
  'published_date' => '2017-01-01 16:54:30',
  'type' => 'module',
  'version' => 1483289671,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Sales',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'Sales_Order',
      'class' => 'Sales_Order',
      'path' => 'modules/Sales_Order/Sales_Order.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sales_order_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sales_order_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sales_order_users_Users.php',
      'to_module' => 'Users',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/sales_order_aos_products_quotes_Sales_Order.php',
      'to_module' => 'Sales_Order',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sales_order_opportunitiesMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sales_order_accountsMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sales_order_usersMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/sales_order_aos_products_quotesMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Sales_Order',
      'to' => 'modules/Sales_Order',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Sales_Order.php',
      'to_module' => 'Sales_Order',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Sales_Order.php',
      'to_module' => 'Sales_Order',
      'language' => 'vi_VN',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.php',
      'to_module' => 'Opportunities',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Opportunities.php',
      'to_module' => 'Opportunities',
      'language' => 'vi_VN',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Sales_Order.php',
      'to_module' => 'Sales_Order',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Sales_Order.php',
      'to_module' => 'Sales_Order',
      'language' => 'vi_VN',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'vi_VN',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Sales_Order.php',
      'to_module' => 'Sales_Order',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Sales_Order.php',
      'to_module' => 'Sales_Order',
      'language' => 'vi_VN',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'en_us',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'vi_VN',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AOS_Products_Quotes.php',
      'to_module' => 'AOS_Products_Quotes',
      'language' => 'en_us',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AOS_Products_Quotes.php',
      'to_module' => 'AOS_Products_Quotes',
      'language' => 'vi_VN',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Sales_Order.php',
      'to_module' => 'Sales_Order',
      'language' => 'en_us',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Sales_Order.php',
      'to_module' => 'Sales_Order',
      'language' => 'vi_VN',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/vi_VN.lang.php',
      'to_module' => 'application',
      'language' => 'vi_VN',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sales_order_opportunities_Sales_Order.php',
      'to_module' => 'Sales_Order',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sales_order_opportunities_Opportunities.php',
      'to_module' => 'Opportunities',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sales_order_accounts_Sales_Order.php',
      'to_module' => 'Sales_Order',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sales_order_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sales_order_users_Sales_Order.php',
      'to_module' => 'Sales_Order',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sales_order_users_Users.php',
      'to_module' => 'Users',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sales_order_aos_products_quotes_AOS_Products_Quotes.php',
      'to_module' => 'AOS_Products_Quotes',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/sales_order_aos_products_quotes_Sales_Order.php',
      'to_module' => 'Sales_Order',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
        'AOS_Products_Quotes' => 'sales_order_aos_products_quotes_name',
      ),
    ),
  ),
);