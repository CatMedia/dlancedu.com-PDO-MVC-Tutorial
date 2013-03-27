<?php /* Smarty version Smarty-3.1.8, created on 2012-11-06 15:46:40
         compiled from "C:\xampp\htdocs\mvc-twb\views\acl\nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16341509922500991f0-76378726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97bb7d4fc09c3e9c168b7c3de78fb6925ce478e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-twb\\views\\acl\\nuevo_role.tpl',
      1 => 1352213196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16341509922500991f0-76378726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5099225011a035_01127144',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5099225011a035_01127144')) {function content_5099225011a035_01127144($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Nuevo Role</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Role: </td>
            <td><input type="text" name="role" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['role'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Guardar</button></p>
</form><?php }} ?>