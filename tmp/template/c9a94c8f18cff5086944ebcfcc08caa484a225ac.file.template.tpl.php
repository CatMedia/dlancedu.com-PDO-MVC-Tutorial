<?php /* Smarty version Smarty-3.1.8, created on 2012-11-05 16:59:27
         compiled from "/var/www/mvc-twb/views/layout/twb/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303173867509561c248d4e1-71936344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9a94c8f18cff5086944ebcfcc08caa484a225ac' => 
    array (
      0 => '/var/www/mvc-twb/views/layout/twb/template.tpl',
      1 => 1352149088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303173867509561c248d4e1-71936344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509561c39310d1_13614091',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'it' => 0,
    '_item_style' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    '_style' => 0,
    'plg' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509561c39310d1_13614091')) {function content_509561c39310d1_13614091($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin t&iacute;tulo" : $tmp);?>
</title>
        <meta charset="utf-8">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        body{
            padding-top: 40px;
            padding-bottom: 40px;            
        }
        </style>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>
</a>
                
                    <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])){?>
                        <div class="nav-collapse">
                            <ul class="nav">
                                <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>
                                        <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>
                                    <?php }else{ ?>
                                        <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>
                                    <?php }?>

                                    <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
"><a  href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['it']->value['imagen'];?>
"> </i> <?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
                
        <div style="background: #515151; height: 110px; margin-bottom: 20px; width: 100%;">
            <div class="container">
                <div class="span4"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
logo.png"></div>
                <div class="span7"><h2 style="color: #fff; margin-top: 32px;"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_slogan'];?>
</h2></div>
            </div>
        </div>
        
        <div class="container" style="background: #fff;">
            <div class="span8">
                <noscript><p>Para el correcto funcionamiento debe tener el soporte para javascript habilitado</p></noscript>
                    
                <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
                    <div id="_errl" class="alert alert-error">
                        <a class="close" data-dismiss="alert">x</a>
                        <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

                    </div>
                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?>
                    <div id="_msgl" class="alert alert-success">
                        <a class="close" data-dismiss="alert">x</a>
                        <?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>

                    </div>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            
            <div class="span3">
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu_right'])){?>
                    <ul class="nav nav-tabs nav-stacked">
                        <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu_right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>
                                <?php $_smarty_tpl->tpl_vars["_style"] = new Smarty_variable('active', null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars["_style"] = new Smarty_variable('', null, 0);?>
                            <?php }?>

                            <li class="<?php echo $_smarty_tpl->tpl_vars['_style']->value;?>
"><a  href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['it']->value['imagen'];?>
"> </i> <?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
</a></li>
                        <?php } ?>
                    </ul>
                <?php }?>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner">
                <div class="container">
                    <div style="margin-top: 10px; text-align: center;">Copyright&copy; 2012 <a href="http://www.dlancedu.com" target="_blank">www.dlancedu.com</a></div>
                </div>
            </div>
        </div>
            
        <!-- javascript -->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.js"></script>
        
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])){?>
            <?php  $_smarty_tpl->tpl_vars['plg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plg']->key => $_smarty_tpl->tpl_vars['plg']->value){
$_smarty_tpl->tpl_vars['plg']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['plg']->value;?>
" type="text/javascript"></script>
            <?php } ?>
        <?php }?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
            <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
            <?php } ?>
        <?php }?>
    </body>
</html><?php }} ?>