<?php /* Smarty version Smarty-3.1.8, created on 2012-06-07 19:07:22
         compiled from "/var/www/mvc/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12306790854fd1342ab44419-49987341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b61b34d437afa6b5b5107fdaf180a2cb5d1748' => 
    array (
      0 => '/var/www/mvc/views/login/index.tpl',
      1 => 1335208392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12306790854fd1342ab44419-49987341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fd1342af18334_56961168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1342af18334_56961168')) {function content_4fd1342af18334_56961168($_smarty_tpl) {?><h2>Iniciar Sesi&oacute;n</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <p>
        <label>Usuario: </labe>
        <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Password: </labe>
        <input type="password" name="pass" />
    </p>
    
    <p>
        <input type="submit" value="enviar" />
    </p>
</form><?php }} ?>