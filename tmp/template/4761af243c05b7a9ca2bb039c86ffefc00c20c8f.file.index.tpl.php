<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 13:48:32
         compiled from "C:\xampp\htdocs\mvc-twb\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:944250990720bd1e78-24740780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4761af243c05b7a9ca2bb039c86ffefc00c20c8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-twb\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1352115322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944250990720bd1e78-24740780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50990720c54902_42951628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50990720c54902_42951628')) {function content_50990720c54902_42951628($_smarty_tpl) {?><h2>Registro</h2>

<div class="well span5">
    <form name="form1" method="post" action="" class="form">
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
            <button type="submit" class="btn btn-primary">Enviar</button>
        </p>
    </form>
</div><?php }} ?>