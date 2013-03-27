<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 20:13:08
         compiled from "/var/www/mvc/modules/usuarios/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1378278910507df9df0e25e9-27744433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26f6b26c44b91250b7a5bb42287fc2f0b879f41e' => 
    array (
      0 => '/var/www/mvc/modules/usuarios/views/login/index.tpl',
      1 => 1352207466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1378278910507df9df0e25e9-27744433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_507df9df3ea178_74879637',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507df9df3ea178_74879637')) {function content_507df9df3ea178_74879637($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Iniciar Sesi&oacute;n</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Usuario: </td>
            <td><input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>

        <tr>
            <td style="text-align: right;">Password: </td>
            <td><input type="password" name="pass" /></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Entrar</button></p>
</form><?php }} ?>