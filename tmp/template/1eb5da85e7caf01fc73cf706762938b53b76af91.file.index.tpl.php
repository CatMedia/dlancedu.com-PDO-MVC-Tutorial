<?php /* Smarty version Smarty-3.1.8, created on 2012-11-02 20:50:02
         compiled from "C:\xampp\htdocs\mvc\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28150509423ea46e2b7-07426240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eb5da85e7caf01fc73cf706762938b53b76af91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1350432930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28150509423ea46e2b7-07426240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509423ea4d79f2_59231152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509423ea4d79f2_59231152')) {function content_509423ea4d79f2_59231152($_smarty_tpl) {?><h2>Registro</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <p>
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Usuario: </label>
        <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Email: </label>
        <input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Password: </label>
        <input type="password" name="pass" />
    </p>
    
    <p>
        <label>Confirmar: </label>
        <input type="password" name="confirmar" />
    </p>    
        
    <p>
        <input type="submit" value="enviar" />
    </p>
</form><?php }} ?>