<?php
$xpdo_meta_map['CollectionSettings']= array (
  'package' => 'HomeCenter',
  'version' => '1.1',
  'table' => 'collection_settings',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'collection' => NULL,
    'template' => 0,
  ),
  'fieldMeta' => 
  array (
    'collection' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'unique',
    ),
    'template' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
  'indexes' => 
  array (
    'collection' => 
    array (
      'alias' => 'collection',
      'primary' => false,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'collection' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
