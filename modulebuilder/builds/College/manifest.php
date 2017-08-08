<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.9.0.0',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'clg',
  'author' => 'Taha',
  'description' => 'After Probation College Package',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'College',
  'published_date' => '2017-08-08 09:21:51',
  'type' => 'module',
  'version' => 1502184111,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'College',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'clg_Student',
      'class' => 'clg_Student',
      'path' => 'modules/clg_Student/clg_Student.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'clg_Teacher',
      'class' => 'clg_Teacher',
      'path' => 'modules/clg_Teacher/clg_Teacher.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Student',
      'to' => 'modules/clg_Student',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/clg_Teacher',
      'to' => 'modules/clg_Teacher',
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
  ),
  'image_dir' => '<basepath>/icons',
);