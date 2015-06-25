(function($){

    var URI = {};
    URI.GET_CATEGORIAS = "actions/api-Categoria.php?action=listar";
    
    var getCategorias = function(){
        $.ajax({
            url : URI.GET_CATEGORIAS,
            method : 'GET',
            dataType : 'json'
        }).done(function(res){
            if(!res.error){
                res.data.forEach(function(categoria){
                    console.log(categoria);
                    var html = '<tr> \
                    <td class="acti-tipoDescripcion">'+categoria.categoria_nombre+'</td> \
                    <td> \
                        <form class="form-inline" action="actions/actions_categorias.php" method="post"> \
                            <input type="hidden" name="id" value="'+categoria.id_categoria+'"/> \
                            <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button> \
                            <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button> \
                        </form> \
                    </td> \
                </tr>';
                    $("#listado-producto-categorias tbody").append(html);
                });
            }
        });
    };
    getCategorias();
})(jQuery);