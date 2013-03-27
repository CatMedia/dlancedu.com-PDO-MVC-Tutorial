<h2>{if isset($mensaje)} {$mensaje}{/if}</h2>

<p>&nbsp;</p>

<a href="{$_layoutParams.root}">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

{if (!Session::get('autenticado'))}

| <a href="{$_layoutParams.root}login">Iniciar Sesi&oacute;n</a>

{/if}