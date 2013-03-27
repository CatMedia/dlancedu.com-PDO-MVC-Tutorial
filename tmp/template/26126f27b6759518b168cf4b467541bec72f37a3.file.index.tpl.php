<?php /* Smarty version Smarty-3.1.8, created on 2012-11-02 20:54:09
         compiled from "C:\xampp\htdocs\mvc\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7220509424e17f5a76-51366136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26126f27b6759518b168cf4b467541bec72f37a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1350432922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7220509424e17f5a76-51366136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509424e185a4b0_88152362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509424e185a4b0_88152362')) {function content_509424e185a4b0_88152362($_smarty_tpl) {?><h2>Iniciar Sesi&oacute;n</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    
    <p>
        <label>Usuario: </labe>
        <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Password: </labe>
        <input type="password" name="pass" />
    </p>
    
    <p>
        <input type="submit" value="enviar" />
    </p>
</form><?php }} ?>