<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 20:22:34
         compiled from "/var/www/mvc/views/post/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17403393174fda591028b0d3-77773271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b217d41c1996959a3e4e335eedcb4fd79051a32' => 
    array (
      0 => '/var/www/mvc/views/post/nuevo.tpl',
      1 => 1352150412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17403393174fda591028b0d3-77773271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fda5911078d38_32424370',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fda5911078d38_32424370')) {function content_4fda5911078d38_32424370($_smarty_tpl) {?><form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo" enctype="multipart/form-data">
    <input type="hidden" name="guardar" value="1" />
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Titulo: </td>
            <td><input type="texto" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
    
        <tr>
            <td style="text-align: right;">Cuerpo: </td>
            <td><textarea name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea></td>
        </tr>

        <tr>
            <td colspan="4">
                Imagen: <input type="file" name="imagen" />
            </td>
        </tr>
    </table>
        
    <p><button class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
</form><?php }} ?>