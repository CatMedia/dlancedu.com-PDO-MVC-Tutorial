<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 20:12:16
         compiled from "/var/www/mvc/views/acl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2151968674fca895a9c2967-87748457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bf14565dab21e12145342f2b8c8de36d5c3afd6' => 
    array (
      0 => '/var/www/mvc/views/acl/index.tpl',
      1 => 1352151370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2151968674fca895a9c2967-87748457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fca895b687e49_65087152',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fca895b687e49_65087152')) {function content_4fca895b687e49_65087152($_smarty_tpl) {?><h2>Listas de control de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>