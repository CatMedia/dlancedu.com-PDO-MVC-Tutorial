<?php /* Smarty version Smarty-3.1.8, created on 2012-11-09 17:00:20
         compiled from "/var/www/mvc/views/post/ajax/prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16032449845099afdab9d1b0-63946698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d123848d3fcaa1f4575c19cc704f01e66eaddba' => 
    array (
      0 => '/var/www/mvc/views/post/ajax/prueba.tpl',
      1 => 1352494816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16032449845099afdab9d1b0-63946698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5099afdb3a1677_78988483',
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5099afdb3a1677_78988483')) {function content_5099afdb3a1677_78988483($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>
    <table class="table table-bordered table-condensed table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Pais</th>
            <th>Ciudad</th>
        </tr>

        <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['pais'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['ciudad'];?>
</td>
            </tr>
        <?php } ?>
    </table>
<?php }else{ ?>

    <p><strong>No hay posts!</strong></p>

<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>