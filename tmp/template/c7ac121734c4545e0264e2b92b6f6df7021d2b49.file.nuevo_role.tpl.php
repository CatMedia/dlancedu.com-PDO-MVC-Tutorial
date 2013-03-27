<?php /* Smarty version Smarty-3.1.8, created on 2012-06-02 17:45:08
         compiled from "/var/www/mvc/views/acl/nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17167226304fca8964e7b452-99637217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ac121734c4545e0264e2b92b6f6df7021d2b49' => 
    array (
      0 => '/var/www/mvc/views/acl/nuevo_role.tpl',
      1 => 1337955713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17167226304fca8964e7b452-99637217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fca8965236b62_65703787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fca8965236b62_65703787')) {function content_4fca8965236b62_65703787($_smarty_tpl) {?><h2>Nuevo Role</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    
    <p>
        Role: <input type="text" name="role" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['role'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
       <input type="submit" value="Guardar" />
    </p>
</form><?php }} ?>