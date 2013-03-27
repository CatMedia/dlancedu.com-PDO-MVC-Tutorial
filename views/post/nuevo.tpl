<form id="form1" method="post" action="{$_layoutParams.root}post/nuevo" enctype="multipart/form-data">
    <input type="hidden" name="guardar" value="1" />
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Titulo: </td>
            <td><input type="texto" name="titulo" value="{$datos.titulo|default:""}" /></td>
        </tr>
    
        <tr>
            <td style="text-align: right;">Cuerpo: </td>
            <td><textarea name="cuerpo">{$datos.cuerpo|default:""}</textarea></td>
        </tr>

        <tr>
            <td colspan="4">
                Imagen: <input type="file" name="imagen" />
            </td>
        </tr>
    </table>
        
    <p><button class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
</form>