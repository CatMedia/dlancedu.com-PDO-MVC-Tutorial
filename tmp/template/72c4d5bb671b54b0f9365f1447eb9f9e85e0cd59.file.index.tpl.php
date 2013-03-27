<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 20:12:58
         compiled from "/var/www/mvc/modules/usuarios/views/registro/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1751553234507df9e6040009-84749385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72c4d5bb671b54b0f9365f1447eb9f9e85e0cd59' => 
    array (
      0 => '/var/www/mvc/modules/usuarios/views/registro/index.tpl',
      1 => 1352115322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751553234507df9e6040009-84749385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_507df9e62240c3_22645826',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507df9e62240c3_22645826')) {function content_507df9e62240c3_22645826($_smarty_tpl) {?><h2>Registro</h2>

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