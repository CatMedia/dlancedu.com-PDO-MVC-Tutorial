<?php /* Smarty version Smarty-3.1.8, created on 2012-11-05 17:36:24
         compiled from "/var/www/mvc-twb/views/acl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20262880895097ad57916984-69646334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ee24058d30f0af7ece67f0978fc6156776d099' => 
    array (
      0 => '/var/www/mvc-twb/views/acl/index.tpl',
      1 => 1352151371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20262880895097ad57916984-69646334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5097ad57afed64_13509053',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5097ad57afed64_13509053')) {function content_5097ad57afed64_13509053($_smarty_tpl) {?><h2>Listas de control de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>