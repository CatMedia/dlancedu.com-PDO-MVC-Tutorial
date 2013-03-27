<!DOCTYPE html>
<html lang="es">
    <head>
        <title>{$titulo|default:"Sin t&iacute;tulo"}</title>
        <meta charset="utf-8">
        <link href="{$_layoutParams.ruta_css}bootstrap.css" rel="stylesheet" type="text/css">
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
                    <a class="brand" href="{$_layoutParams.root}">{$_layoutParams.configs.app_name}</a>
                
                    {if isset($_layoutParams.menu)}
                        <div class="nav-collapse">
                            <ul class="nav">
                                {foreach item=it from=$_layoutParams.menu}
                                    {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}
                                        {assign var="_item_style" value='active'}
                                    {else}
                                        {assign var="_item_style" value=''}
                                    {/if}

                                    <li class="{$_item_style}"><a  href="{$it.enlace}"><i class="{$it.imagen}"> </i> {$it.titulo}</a></li>
                                {/foreach}
                            </ul>
                            
                            {if Session::get('autenticado')}
                                <div class="navbar-form pull-right">
                                    <a href="{$_layoutParams.root}usuarios/login/cerrar" class="btn"><i class="icon-fire"> </i> Salir</a>
                                </div>
                            {else}
                                <form class="navbar-form pull-right" method="post" action="{$_layoutParams.root}usuarios/login">
                                    <input type="hidden" value="1" name="enviar">
                                    <input class="span2" name="usuario" type="text" placeholder="Usuario">
                                    <input class="span2" name="pass" type="password" placeholder="Password">
                                    <button type="submit" class="btn">Entrar</button>
                                </form>
                            {/if}
                        </div>
                    {/if}
                </div>
            </div>
        </div>
                
        <div style="background: #515151; height: 110px; margin-bottom: 20px; width: 100%;">
            <div class="container">
                <div class="span4" style="height:110px; background: url('{$_layoutParams.ruta_img}logo.png') no-repeat center left"></div>
                <div class="span7"><h2 style="color: #fff; margin-top: 32px;">{$_layoutParams.configs.app_slogan}</h2></div>
            </div>
        </div>
        
        <div class="container" style="background: #fff;">
            <div class="span8">
                <noscript><p>Para el correcto funcionamiento debe tener el soporte para javascript habilitado</p></noscript>
                    
                {if isset($_error)}
                    <div id="_errl" class="alert alert-error">
                        <a class="close" data-dismiss="alert">x</a>
                        {$_error}
                    </div>
                {/if}

                {if isset($_mensaje)}
                    <div id="_msgl" class="alert alert-success">
                        <a class="close" data-dismiss="alert">x</a>
                        {$_mensaje}
                    </div>
                {/if}

                {include file=$_contenido}
            </div>
            
            <div class="span3">
                {if isset($_layoutParams.menu_right)}
                    <ul class="nav nav-tabs nav-stacked">
                        {foreach item=it from=$_layoutParams.menu_right}
                            {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}
                                {assign var="_style" value='active'}
                            {else}
                                {assign var="_style" value=''}
                            {/if}

                            <li class="{$_style}"><a  href="{$it.enlace}"><i class="{$it.imagen}"> </i> {$it.titulo}</a></li>
                        {/foreach}
                    </ul>
                {/if}
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
        <script type="text/javascript" src="{$_layoutParams.root}public/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="{$_layoutParams.ruta_js}bootstrap.js"></script>
        <script type="text/javascript">
            var _root_ = '{$_layoutParams.root}';
        </script>
        
        {if isset($_layoutParams.js_plugin) && count($_layoutParams.js_plugin)}
            {foreach item=plg from=$_layoutParams.js_plugin}
                <script src="{$plg}" type="text/javascript"></script>
            {/foreach}
        {/if}
        
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach item=js from=$_layoutParams.js}
                <script src="{$js}" type="text/javascript"></script>
            {/foreach}
        {/if}
    </body>
</html>