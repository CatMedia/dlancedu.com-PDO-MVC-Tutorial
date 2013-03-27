<?php /* Smarty version Smarty-3.1.8, created on 2012-11-05 17:20:17
         compiled from "/var/www/mvc-twb/views/post/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30379381350981fd4e15dc6-99794689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b517251acfbd23634b2d63c3dff1313ee9092c4' => 
    array (
      0 => '/var/www/mvc-twb/views/post/nuevo.tpl',
      1 => 1352150413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30379381350981fd4e15dc6-99794689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50981fd509a976_79905970',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50981fd509a976_79905970')) {function content_50981fd509a976_79905970($_smarty_tpl) {?><form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
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