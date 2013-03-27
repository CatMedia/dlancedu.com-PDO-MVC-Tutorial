<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$titulo|default:"Sin titulo"}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link href="{$_layoutParams.ruta_css}estilos.css" rel="stylesheet" type="text/css" />
        <script src="{$_layoutParams.root}public/js/jquery.js" type="text/javascript"></script>
        <script src="{$_layoutParams.root}public/js/jquery.validate.js" type="text/javascript"></script>
    
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
        
        <script src="{$js}" type="text/javascript"></script>
        
        {/foreach}
        {/if}
    </head>

    <body>
        <body>
            <div id="main">
                <div id="header">
                    <div id="logo">
                        <h1>{$_layoutParams.configs.app_name}</h1>
                    </div>

                    <div id="menu">
                        <div id="top_menu">
                            <ul>
                            {if isset($_layoutParams.menu)}
                            {foreach item=it from=$_layoutParams.menu}
                            
                            {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}
                                
                                {assign var="_item_style" value='current'}
                                
                            {else}
                            
                                {assign var="_item_style" value=''}
                                
                            {/if}
                            
                            <li><a class="{$_item_style}" href="{$it.enlace}">{$it.titulo}</a></li>

                            {/foreach}
                            {/if}
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="content">
                    <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
                    
                    {if isset($_error)}
                    <div id="error">{$_error}</div>
                    {/if}

                    {if isset($_mensaje)}
                    <div id="mensaje">{$_mensaje}</div>
                    {/if}

                    {include file=$_contenido}
                    
                                </div>

            <div id="footer">
                Copyright &copy; 2012 <a href="http://www.dlancedu.com" target="_blank">{$_layoutParams.configs.app_company}</a>
            </div>
        </div>
    </body>
</html>