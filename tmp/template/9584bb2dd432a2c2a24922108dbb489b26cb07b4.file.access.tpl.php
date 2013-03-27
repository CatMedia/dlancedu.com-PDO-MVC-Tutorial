<?php /* Smarty version Smarty-3.1.8, created on 2012-06-02 17:45:48
         compiled from "/var/www/mvc/views/error/access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5217321964fca898c0ba706-77315281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9584bb2dd432a2c2a24922108dbb489b26cb07b4' => 
    array (
      0 => '/var/www/mvc/views/error/access.tpl',
      1 => 1335208334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5217321964fca898c0ba706-77315281',
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
  'unifunc' => 'content_4fca898c3ce070_81394337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fca898c3ce070_81394337')) {function content_4fca898c3ce070_81394337($_smarty_tpl) {?><h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>

<p>&nbsp;</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

<?php if ((!Session::get('autenticado'))){?>

| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesi&oacute;n</a>

<?php }?><?php }} ?>