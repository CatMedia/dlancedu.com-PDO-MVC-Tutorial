<?php /* Smarty version Smarty-3.1.8, created on 2012-11-05 17:47:12
         compiled from "/var/www/mvc-twb/views/post/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603268685509821beafdf92-12348003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4510c9b7003003806902b4b1a85d362ac3819496' => 
    array (
      0 => '/var/www/mvc-twb/views/post/editar.tpl',
      1 => 1352152019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603268685509821beafdf92-12348003',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509821becb6999_19535862',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509821becb6999_19535862')) {function content_509821becb6999_19535862($_smarty_tpl) {?><form id="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Titulo: </td>
            <td><input type="text" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
    
        <tr>
            <td style="text-align: right;">Cuerpo: </td>
            <td><textarea name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea></td>
        </tr>
    </table>
        
    <p><button class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
</form><?php }} ?>