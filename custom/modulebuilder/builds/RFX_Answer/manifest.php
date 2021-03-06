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
  'key' => 'rfxa',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'RFX_Answer',
  'published_date' => '2016-05-22 15:03:17',
  'type' => 'module',
  'version' => 1463929397,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'RFX_Answer',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'rfxa_RFX_Answer',
      'class' => 'rfxa_RFX_Answer',
      'path' => 'modules/rfxa_RFX_Answer/rfxa_RFX_Answer.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/rfxa_RFX_Answer',
      'to' => 'modules/rfxa_RFX_Answer',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/de_DE.lang.php',
      'to_module' => 'application',
      'language' => 'de_DE',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/da_DK.lang.php',
      'to_module' => 'application',
      'language' => 'da_DK',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_es.lang.php',
      'to_module' => 'application',
      'language' => 'es_es',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/tr_TR.lang.php',
      'to_module' => 'application',
      'language' => 'tr_TR',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_ES.lang.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/hu_HU.lang.php',
      'to_module' => 'application',
      'language' => 'hu_HU',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pl_PL.lang.php',
      'to_module' => 'application',
      'language' => 'pl_PL',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pt_BR.lang.php',
      'to_module' => 'application',
      'language' => 'pt_BR',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
      'to_module' => 'application',
      'language' => 'fr_FR',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ru_ru.lang.php',
      'to_module' => 'application',
      'language' => 'ru_ru',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/it_IT.lang.php',
      'to_module' => 'application',
      'language' => 'it_IT',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/nl_NL.lang.php',
      'to_module' => 'application',
      'language' => 'nl_NL',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/id_ID.lang.php',
      'to_module' => 'application',
      'language' => 'id_ID',
    ),
  ),
);