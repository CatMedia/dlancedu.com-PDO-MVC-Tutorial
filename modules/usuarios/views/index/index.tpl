<h2>Usuarios</h2>

{if isset($usuarios) && count($usuarios)}
    <table class="table table-bordered table-striped table-condensed">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Role</th>
            <th></th>
        </tr>
        
        {foreach from=$usuarios item=us}
        <tr>
            <td>{$us.id}</td>
            <td>{$us.usuario}</td>
            <td>{$us.role}</td>
            <td>
                <a href="{$_layoutParams.root}usuarios/index/permisos/{$us.id}">
                   Permisos
                </a>
            </td>
        </tr>
            
        {/foreach}
    </table>
{/if}