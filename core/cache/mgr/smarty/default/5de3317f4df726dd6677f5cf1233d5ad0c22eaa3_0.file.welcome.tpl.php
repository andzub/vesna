<?php /* Smarty version 3.1.27, created on 2017-12-18 12:11:49
         compiled from "C:\OSPanel\domains\vesna\super\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:222065a378655414843_91791962%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de3317f4df726dd6677f5cf1233d5ad0c22eaa3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\vesna\\super\\templates\\default\\welcome.tpl',
      1 => 1499760404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222065a378655414843_91791962',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a378655423163_33628291',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a378655423163_33628291')) {
function content_5a378655423163_33628291 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '222065a378655414843_91791962';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>