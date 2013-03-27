<?php /* Smarty version Smarty-3.1.8, created on 2012-06-02 17:45:47
         compiled from "/var/www/mvc/views/post/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2034396074fca898b8f8a29-26049510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a70ab437a879ca1a6a38d45302f6ee0423dc677d' => 
    array (
      0 => '/var/www/mvc/views/post/editar.tpl',
      1 => 1335208414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2034396074fca898b8f8a29-26049510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fca898bb4bd59_36182719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fca898bb4bd59_36182719')) {function content_4fca898bb4bd59_36182719($_smarty_tpl) {?><form id="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <p>Titulo:<br />
    <input type="texto" name="titulo" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['titulo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
<?php }?>" /></p>
    
    <p>Cuerpo:<br />
    <textarea name="cuerpo"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['cuerpo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['cuerpo'];?>
<?php }?></textarea></p>
    
    <p><input type="submit" class="button" value="Guardar" /></p>
</form><?php }} ?>