<?php /* Smarty version Smarty-3.1.8, created on 2012-11-05 08:34:37
         compiled from "/var/www/mvc-twb/views/acl/nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5689573955097b25d64f018-06930374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85e6c2fe5bca21a4bbdf10a18c677e2a21e4faac' => 
    array (
      0 => '/var/www/mvc-twb/views/acl/nuevo_role.tpl',
      1 => 1337955712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5689573955097b25d64f018-06930374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5097b25d77f1d5_83423817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5097b25d77f1d5_83423817')) {function content_5097b25d77f1d5_83423817($_smarty_tpl) {?><h2>Nuevo Role</h2>

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