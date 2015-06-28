(function($){

    var URI = {};
    URI.GET_TIPOS = "actions/api-actividad-tipo.php?action=listar";
    
    var getTipos = function(){
        
        $.ajax({
            url : URI.GET_TIPOS,
            method : 'GET',
            dataType : 'json'
        }).done(function(res){
            if(!res.error){
                res.data.forEach(function(tipo){
                    console.log(tipo);
                    var html = '<tr> \
                    <td class="acti-tipoDescripcion">'+tipo.descripcion+'</td> \
                    <td> \
                        <form class="form-inline" action="actions/actions-actividad-tipo.php" method="post"> \
                            <input type="hidden" name="id" value="'+tipo.id+'"/> \
                            <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button> \
                            <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button> \
                        </form> \
                    </td> \
                </tr>';
                    $("#listado-tipos tbody").append(html);
                });
            }
        });
    };
    getTipos();
})(jQuery);