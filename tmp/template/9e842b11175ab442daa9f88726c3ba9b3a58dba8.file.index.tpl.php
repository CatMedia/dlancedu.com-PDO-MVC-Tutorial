<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 14:50:21
         compiled from "C:\xampp\htdocs\mvc-twb\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1066950990716c6c7c4-66347474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e842b11175ab442daa9f88726c3ba9b3a58dba8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-twb\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1352207464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066950990716c6c7c4-66347474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50990716cc0716_15679892',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50990716cc0716_15679892')) {function content_50990716cc0716_15679892($_smarty_tpl) {?><style type="text/css">
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