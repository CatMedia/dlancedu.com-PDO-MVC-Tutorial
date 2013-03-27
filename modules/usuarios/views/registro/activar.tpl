<h2>Activaci&oacute;n de Cuenta</h2>

<p> </p>

<a href="{$_layoutParams.root}">Ir al Inicio</a>

{if !Session::get('autenticado')}
	
	| <a href="{$_layoutParams.root}login">Iniciar Sesi&oacute;n</a>

{/if}