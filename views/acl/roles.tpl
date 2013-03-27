<h2>Administraci&oacute;n de roles</h2>

{if isset($roles) && count($roles)}
    <table class="table table-bordered table-condensed table-striped">
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th></th>
            <th></th>
        </tr>
        
        {foreach item=rl from=$roles}
            <tr>
                <td>{$rl.id_role}</td>
                <td>{$rl.role}</td>
                <td>
                    <a href="{$_layoutParams.root}acl/permisos_role/{$rl.id_role}">Permisos</a>
                </td>
                <td>Editar</td>
            </tr>
        {/foreach}
    </table>
{/if}

<p><a class="btn btn-primary" href="{$_layoutParams.root}acl/nuevo_role"><i class="icon-plus-sign icon-white"> </i> Agregar Role</a></p>