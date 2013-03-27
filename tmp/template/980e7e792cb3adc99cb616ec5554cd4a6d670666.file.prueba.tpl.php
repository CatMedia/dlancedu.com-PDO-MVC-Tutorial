<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 20:23:16
         compiled from "C:\xampp\htdocs\mvc-twb\views\post\ajax\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2719150996276a56699-54441947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '980e7e792cb3adc99cb616ec5554cd4a6d670666' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-twb\\views\\post\\ajax\\prueba.tpl',
      1 => 1352229791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2719150996276a56699-54441947',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50996276abf6e1_06641261',
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50996276abf6e1_06641261')) {function content_50996276abf6e1_06641261($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>
    <table class="table table-bordered table-condensed table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
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
            </tr>
        <?php } ?>
        </div>
    </table>
<?php }else{ ?>

    <p><strong>No hay posts!</strong></p>

<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>