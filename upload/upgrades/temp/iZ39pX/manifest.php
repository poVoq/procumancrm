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
  'key' => 'PO',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Purchase_orders',
  'published_date' => '2015-10-31 17:25:25',
  'type' => 'module',
  'version' => 1446312325,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Purchase_orders',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'PO_Purchase_header',
      'class' => 'PO_Purchase_header',
      'path' => 'modules/PO_Purchase_header/PO_Purchase_header.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'PO_Purchase_lines',
      'class' => 'PO_Purchase_lines',
      'path' => 'modules/PO_Purchase_lines/PO_Purchase_lines.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/po_purchase_header_po_purchase_lines_PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/po_purchase_header_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/po_purchase_header_notes_PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/po_purchase_header_aos_contracts_AOS_Contracts.php',
      'to_module' => 'AOS_Contracts',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/po_purchase_header_documents_PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/po_purchase_lines_aos_products_AOS_Products.php',
      'to_module' => 'AOS_Products',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/po_purchase_header_po_purchase_linesMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/po_purchase_header_accountsMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/po_purchase_header_notesMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/po_purchase_header_aos_contractsMetaData.php',
    ),
    4 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/po_purchase_header_documentsMetaData.php',
    ),
    5 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/po_purchase_lines_aos_productsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/PO_Purchase_header',
      'to' => 'modules/PO_Purchase_header',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/PO_Purchase_lines',
      'to' => 'modules/PO_Purchase_lines',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_lines.php',
      'to_module' => 'PO_Purchase_lines',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_lines.php',
      'to_module' => 'PO_Purchase_lines',
      'language' => 'es_es',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_lines.php',
      'to_module' => 'PO_Purchase_lines',
      'language' => 'ru_ru',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'es_es',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'ru_ru',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'es_es',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'ru_ru',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'es_es',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'ru_ru',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Notes.php',
      'to_module' => 'Notes',
      'language' => 'en_us',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Notes.php',
      'to_module' => 'Notes',
      'language' => 'es_es',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Notes.php',
      'to_module' => 'Notes',
      'language' => 'ru_ru',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'en_us',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'es_es',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'ru_ru',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'en_us',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'es_es',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'ru_ru',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AOS_Contracts.php',
      'to_module' => 'AOS_Contracts',
      'language' => 'en_us',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AOS_Contracts.php',
      'to_module' => 'AOS_Contracts',
      'language' => 'es_es',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AOS_Contracts.php',
      'to_module' => 'AOS_Contracts',
      'language' => 'ru_ru',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'en_us',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'es_es',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
      'to_module' => 'Documents',
      'language' => 'ru_ru',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'en_us',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'es_es',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
      'language' => 'ru_ru',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_lines.php',
      'to_module' => 'PO_Purchase_lines',
      'language' => 'en_us',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_lines.php',
      'to_module' => 'PO_Purchase_lines',
      'language' => 'es_es',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/PO_Purchase_lines.php',
      'to_module' => 'PO_Purchase_lines',
      'language' => 'ru_ru',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AOS_Products.php',
      'to_module' => 'AOS_Products',
      'language' => 'en_us',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AOS_Products.php',
      'to_module' => 'AOS_Products',
      'language' => 'es_es',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AOS_Products.php',
      'to_module' => 'AOS_Products',
      'language' => 'ru_ru',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_po_purchase_lines_PO_Purchase_lines.php',
      'to_module' => 'PO_Purchase_lines',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_po_purchase_lines_PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_accounts_PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_notes_Notes.php',
      'to_module' => 'Notes',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_notes_PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_aos_contracts_PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_aos_contracts_AOS_Contracts.php',
      'to_module' => 'AOS_Contracts',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_documents_Documents.php',
      'to_module' => 'Documents',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_header_documents_PO_Purchase_header.php',
      'to_module' => 'PO_Purchase_header',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_lines_aos_products_PO_Purchase_lines.php',
      'to_module' => 'PO_Purchase_lines',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/po_purchase_lines_aos_products_AOS_Products.php',
      'to_module' => 'AOS_Products',
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
        'Notes' => 'po_purchase_header_notes_name',
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
        'Documents' => 'po_purchase_header_documents_name',
      ),
    ),
    5 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);