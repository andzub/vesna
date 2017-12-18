<?php return array (
  '7eb911eee116d1bd50ede90c1dda2815' => 
  array (
    'criteria' => 
    array (
      'name' => 'phpthumbon',
    ),
    'object' => 
    array (
      'name' => 'phpthumbon',
      'path' => '{core_path}components/phpthumbon/',
      'assets_path' => '',
    ),
  ),
  'af36bfc2c3c625afa629e0e3d9ea341b' => 
  array (
    'criteria' => 
    array (
      'name' => 'phpthumbon',
    ),
    'object' => 
    array (
      'id' => 47,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'phpthumbon',
      'description' => 'Создание превьюх картинок',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '/**
 * phpThumbOn
 * Создание превьюх картинок
 *
 * Copyright 2013 by Agel_Nash <Agel_Nash@xaker.ru>
 *
 * @category images
 * @license GNU General Public License (GPL), http://www.gnu.org/copyleft/gpl.html
 * @author Agel_Nash <Agel_Nash@xaker.ru>
 */

if(empty($modx) || !($modx instanceof modX)) return \'\';

$componentPath = (string)$modx->getOption(\'phpthumbon.core_path\', null, $modx->getOption(\'core_path\').\'components/phpthumbon/\');

if(!isset($modx->phpThumbOn)){
    $modx->phpThumbOn = $modx->getService("phpthumbon","phpThumbOn",$componentPath.\'model/phpthumbon/\', $scriptProperties);
}

if(!($flag = ($modx->phpThumbOn instanceof phpThumbOn))){
    $modx->phpThumbOn = null;
}
return $flag ? $modx->phpThumbOn->run($scriptProperties) : $modx->getOption(\'phpthumbon.noimage\', $scriptProperties);',
      'locked' => 0,
      'properties' => 'a:2:{s:5:"input";a:7:{s:4:"name";s:5:"input";s:4:"desc";s:16:"phpthumbon.input";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"phpthumbon:properties";s:4:"area";s:0:"";}s:7:"options";a:7:{s:4:"name";s:7:"options";s:4:"desc";s:17:"phpthumbon.folder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"phpthumbon:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * phpThumbOn
 * Создание превьюх картинок
 *
 * Copyright 2013 by Agel_Nash <Agel_Nash@xaker.ru>
 *
 * @category images
 * @license GNU General Public License (GPL), http://www.gnu.org/copyleft/gpl.html
 * @author Agel_Nash <Agel_Nash@xaker.ru>
 */

if(empty($modx) || !($modx instanceof modX)) return \'\';

$componentPath = (string)$modx->getOption(\'phpthumbon.core_path\', null, $modx->getOption(\'core_path\').\'components/phpthumbon/\');

if(!isset($modx->phpThumbOn)){
    $modx->phpThumbOn = $modx->getService("phpthumbon","phpThumbOn",$componentPath.\'model/phpthumbon/\', $scriptProperties);
}

if(!($flag = ($modx->phpThumbOn instanceof phpThumbOn))){
    $modx->phpThumbOn = null;
}
return $flag ? $modx->phpThumbOn->run($scriptProperties) : $modx->getOption(\'phpthumbon.noimage\', $scriptProperties);',
    ),
  ),
  'f21690498619da61750252a45b2fd33b' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbon.images_dir',
    ),
    'object' => 
    array (
      'key' => 'phpthumbon.images_dir',
      'value' => 'images',
      'xtype' => 'textfield',
      'namespace' => 'phpthumbon',
      'area' => 'paths',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6fd79d396ec5d69a2a787e5865b8da35' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbon.quality',
    ),
    'object' => 
    array (
      'key' => 'phpthumbon.quality',
      'value' => '96',
      'xtype' => 'numberfield',
      'namespace' => 'phpthumbon',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '1ad88c831cb6e3eede6c1c0ee0cf2b68' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbon.cache_dir',
    ),
    'object' => 
    array (
      'key' => 'phpthumbon.cache_dir',
      'value' => 'cache_image',
      'xtype' => 'textfield',
      'namespace' => 'phpthumbon',
      'area' => 'path',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3be21e2fd2dcb2268e68ea5021b751ee' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbon.ext',
    ),
    'object' => 
    array (
      'key' => 'phpthumbon.ext',
      'value' => 'jpeg',
      'xtype' => 'textfield',
      'namespace' => 'phpthumbon',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd72a39078d78bfb0743eefa557b228f0' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbon.noimage',
    ),
    'object' => 
    array (
      'key' => 'phpthumbon.noimage',
      'value' => '{assets_path}components/phpthumbon/noimage.jpg',
      'xtype' => 'textfield',
      'namespace' => 'phpthumbon',
      'area' => 'path',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd330559aa708d0a72f4d1dab95210137' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbon.queue',
    ),
    'object' => 
    array (
      'key' => 'phpthumbon.queue',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'phpthumbon',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '355d2c55f69176be3f976bc2b32b9b9a' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbon.error_mode',
    ),
    'object' => 
    array (
      'key' => 'phpthumbon.error_mode',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'phpthumbon',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd6cb6583f357f039c0b5cb5b7e145785' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbon.noimage_cache',
    ),
    'object' => 
    array (
      'key' => 'phpthumbon.noimage_cache',
      'value' => '{assets_path}components/phpthumbon/cache/',
      'xtype' => 'textfield',
      'namespace' => 'phpthumbon',
      'area' => 'path',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '66d5a48c8fedba6ae90d1fef3ff516fb' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbon.make_cachename',
    ),
    'object' => 
    array (
      'key' => 'phpthumbon.make_cachename',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'phpthumbon',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
);