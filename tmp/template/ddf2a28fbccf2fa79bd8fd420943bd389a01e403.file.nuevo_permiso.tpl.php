<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 15:49:32
         compiled from "C:\xampp\htdocs\mvc-twb\views\acl\nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1105509922e7ea72f5-59398059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddf2a28fbccf2fa79bd8fd420943bd389a01e403' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-twb\\views\\acl\\nuevo_permiso.tpl',
      1 => 1352213362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1105509922e7ea72f5-59398059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509922e7f09721_28782476',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509922e7f09721_28782476')) {function content_509922e7f09721_28782476($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Nuevo Permiso</h2>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Permiso: </td>
            <td><input type="text" name="permiso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>

        <tr>
            <td style="text-align: right;">Key: </td>
            <td><input type="text" name="key" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Guardar</button></p>
</form><?php }} ?>