<?php /* Smarty version Smarty-3.1.8, created on 2012-11-03 14:58:14
         compiled from "/var/www/mvc-twb/views/error/access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56489902509569465a70e8-35947308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79136a738b5136481c7b06002e197c87e026e390' => 
    array (
      0 => '/var/www/mvc-twb/views/error/access.tpl',
      1 => 1335208334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56489902509569465a70e8-35947308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509569467a9111_27057610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509569467a9111_27057610')) {function content_509569467a9111_27057610($_smarty_tpl) {?><h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

<?php if ((!Session::get('autenticado'))){?>

| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesi&oacute;n</a>

<?php }?><?php }} ?>