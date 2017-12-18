<?php /* Smarty version 3.1.27, created on 2017-12-18 12:44:29
         compiled from "C:\OSPanel\domains\vesna\super\templates\default\element\tv\renders\input\radio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:182035a378dfdd91682_55600962%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54357c5ffc738f7da10440d8ab3647881631de64' => 
    array (
      0 => 'C:\\OSPanel\\domains\\vesna\\super\\templates\\default\\element\\tv\\renders\\input\\radio.tpl',
      1 => 1499760402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182035a378dfdd91682_55600962',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
    'opts' => 0,
    'k' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a378dfde05a45_15154790',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a378dfde05a45_15154790')) {
function content_5a378dfde05a45_15154790 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '182035a378dfdd91682_55600962';
?>
<div id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-cb"></div>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'radiogroup'
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,vertical: true
        ,columns: <?php if ($_smarty_tpl->tpl_vars['params']->value['columns']) {
echo $_smarty_tpl->tpl_vars['params']->value['columns'];
} else { ?>1<?php }?>
        ,renderTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-cb'
        ,width: '99%'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        ,hideMode: 'offsets'
        ,msgTarget: 'under'

        ,items: [<?php
$_from = $_smarty_tpl->tpl_vars['opts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_cbs'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_cbs']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_cbs']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_cbs']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_cbs']->value['total'];
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        {
            name: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
            ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'
            ,boxLabel: '<?php echo strtr($_smarty_tpl->tpl_vars['item']->value['text'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            ,checked: <?php if ($_smarty_tpl->tpl_vars['item']->value['checked']) {?>true<?php } else { ?>false<?php }?>
            ,inputValue: <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>

            ,value: <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>


            ,listeners: { 'check': MODx.fireResourceFormChange }

        }<?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_cbs']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_cbs']->value['last'] : null)) {?>,<?php }?>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>]
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>