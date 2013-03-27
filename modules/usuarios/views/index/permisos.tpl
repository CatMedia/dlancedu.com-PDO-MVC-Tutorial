<style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input, select { margin: 0; }
</style>

<h2>Permisos de Usuario</h2>

<p>
    <strong>Usuario:</strong> {$info.usuario} | <strong>Role:</strong> {$info.role}
</p>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    
    {if isset($permisos) && count($permisos)}
        <table class="table table-bordered table-striped table-condensed" style="width: 500px;">        
            {foreach from=$permisos item=pr}
                {if $role.$pr.valor == 1}
                    {assign var="v" value="habilitado"}
                {else}
                    {assign var="v" value="denegado"}
                {/if}
                
                <tr>
                    <td>{$usuario.$pr.permiso}</td>

                    <td>
                        <select name="perm_{$usuario.$pr.id}">
                            <option value="x"{if $usuario.$pr.heredado} selected="selected"{/if}>Heredado({$v})</option>
                            <option value="1"{if ($usuario.$pr.valor == 1 && $usuario.$pr.heredado == "")} selected="selected"{/if}>Habilitado</option>
                            <option value=""{if ($usuario.$pr.valor == "" && $usuario.$pr.heredado == "")} selected="selected"{/if}>Denegado</option>
                        </select>
                    </td>
                </tr>

            {/foreach}
        </table>

        <p><button type="submit" value="guardar" class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
    {/if}
</form>