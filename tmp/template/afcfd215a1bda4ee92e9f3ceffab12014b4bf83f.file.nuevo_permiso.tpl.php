<?php /* Smarty version Smarty-3.1.8, created on 2012-11-05 09:07:06
         compiled from "/var/www/mvc-twb/views/acl/nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3780335097b9fa7f1856-88107745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afcfd215a1bda4ee92e9f3ceffab12014b4bf83f' => 
    array (
      0 => '/var/www/mvc-twb/views/acl/nuevo_permiso.tpl',
      1 => 1338672564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3780335097b9fa7f1856-88107745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5097b9fa9e7848_53260186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5097b9fa9e7848_53260186')) {function content_5097b9fa9e7848_53260186($_smarty_tpl) {?><h2>Agregar Permiso</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    
    <p>
        Permiso: <input type="text" name="permiso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        Key: <input type="text" name="key" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
       <input type="submit" value="Guardar" />
    </p>
</form><?php }} ?>