<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 13:48:18
         compiled from "C:\xampp\htdocs\mvc-twb\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263085099071209c084-77900992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e5d6c8c44db31a9766ff046324ae4b503487ddb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-twb\\views\\acl\\index.tpl',
      1 => 1352151370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263085099071209c084-77900992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509907120eadf5_89511850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509907120eadf5_89511850')) {function content_509907120eadf5_89511850($_smarty_tpl) {?><h2>Listas de control de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>