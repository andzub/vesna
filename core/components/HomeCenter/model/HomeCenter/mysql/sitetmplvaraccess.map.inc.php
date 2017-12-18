<?php
$xpdo_meta_map['SiteTmplvarAccess']= array (
  'package' => 'HomeCenter',
  'version' => '1.1',
  'table' => 'site_tmplvar_access',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'tmplvarid' => 0,
    'documentgroup' => 0,
  ),
  'fieldMeta' => 
  array (
    'tmplvarid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'documentgroup' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
  'indexes' => 
  array (
    'tmplvar_template' => 
    array (
      'alias' => 'tmplvar_template',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'tmplvarid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'documentgroup' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
