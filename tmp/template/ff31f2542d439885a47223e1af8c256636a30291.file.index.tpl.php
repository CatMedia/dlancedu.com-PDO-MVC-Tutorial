<?php /* Smarty version Smarty-3.1.8, created on 2012-11-05 16:29:29
         compiled from "/var/www/mvc-twb/modules/usuarios/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:683191745509561c9460fb3-65833430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff31f2542d439885a47223e1af8c256636a30291' => 
    array (
      0 => '/var/www/mvc-twb/modules/usuarios/views/login/index.tpl',
      1 => 1352147354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '683191745509561c9460fb3-65833430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509561c95be939_30265177',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509561c95be939_30265177')) {function content_509561c95be939_30265177($_smarty_tpl) {?><style type="text/css">
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