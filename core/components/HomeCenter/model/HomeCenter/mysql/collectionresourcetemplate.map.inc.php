<?php
$xpdo_meta_map['CollectionResourceTemplate']= array (
  'package' => 'HomeCenter',
  'version' => '1.1',
  'table' => 'collection_resource_template',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'collection_template' => NULL,
    'resource_template' => NULL,
  ),
  'fieldMeta' => 
  array (
    'collection_template' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
    ),
    'resource_template' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'collection_template' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'resource_template' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
