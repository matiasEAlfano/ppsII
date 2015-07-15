(function($){
    
    $form = $("#form-actiTipo");
    $listado = $("#listado-tipos tbody");
    
    //GUARDA-ACTUALIZA EL TIPO
    $form.on("submit", function(event){
        event.preventDefault();
        var accion = $(this).closest("form").find("input[name=action]").val();
        
        if(accion=="guardar"){
            guardarDatos();
        }
        
        if(accion=="actualizar"){
            var id = $(this).closest("form").find("input[name=id]").val();
            actualizarDatos(id);
        }
    });
    
    //ELIMINAR UN TIPO
    $listado.on("click", ".eliminar", function(){
        var id = $(this).closest("td").find("input[name=id]").val();
        eliminarDatos(id);
    });
    
    //CARGA EL FORMULARIO CON LOS DATOS QUE SE QUIEREN ACTUALIZAR
    $listado.on("click", ".actualizar", function(){
        var id = $(this).closest("td").find("input[name=id]").val();
        miFormulario(id);
    });
    
    //ACTUALIZA LOS DATOS
    /*$form.on("submit", function(event){
        event.preventDefault();
        var id = $(this).closest("form").find("input[name=id]").val();
        actualizarDatos(id);
    });*/
    
    var URI = {
        LISTAR: "actions/api-actividadTipo.php?action=listar",
        GUARDAR: "actions/api-actividadTipo.php?action=guardar",
        ELIMINAR: "actions/api-actividadTipo.php?action=eliminar",
        GET_DATO: "actions/api-actividadTipo.php?action=traerDato",
        ACTUALIZAR: "actions/api-actividadTipo.php?action=actualizar"
    }
    
    
    var actualizarDatos = function(id){
        var actualizar = $.ajax({
            url: URI.ACTUALIZAR,
            method: 'post',
            data: $form.serialize()
        });
        
        actualizar.done(function(res){
            console.log(res);
            
            if(!res.error){
                miFormulario();
                listarDatos();
            }
        });
        
        actualizar.fail(function(res){
            console.log(res);
        });
    }
    
    
    var eliminarDatos = function(id){
        
        var eliminar = $.ajax({
            url: URI.ELIMINAR,
            method: 'POST',
            data: {id: id}
        });
        
        eliminar.done(function(res){
            console.log(res);
            
            if(!res.error){
                miFormulario();
                listarDatos();
            }
        });
        
        eliminar.fail(function(res){
            console.log(res);
        });
    }
    
    
    var guardarDatos = function(){
        
        var guardar = $.ajax({
            url: URI.GUARDAR,
            method: 'POST',
            data: $form.serialize()            
        });
        
        guardar.done(function(res){
            console.log(res);
            
            if(!res.error){
                miFormulario();
                listarDatos();
            }
            
        });
        
        guardar.fail(function(res){
            console.log(res);
        });
    }
    
    
    //ESCRIBE EL HTML DEL FORMULARIO
    var miFormulario = function(id){
        
        if(id==undefined){
            $form.html("");
        
            var html = '<label>Tipo de Actividad:</label>\
        <input name="descripcion" type="text" class="form-control abm-inputs" id="tipo-actividad" placeholder="Tipo">\
        <input type="submit" class="btn btn-primary guardar" name="action" value="guardar">';
        /*<button name="guardar" type="submit" class="btn btn-primary guardar">Guardar</button>*/
            

            $form.append(html);
            
        }else{
            
            var form = $.ajax({
                url: URI.GET_DATO,
                method: 'GET',
                data: {id: id},
                dataType: 'json'
            });
            
            form.done(function(res){
                console.log(res);
                
                if(!res.error){
                    $form.html("");
        
                    var html = '<label>Tipo de Actividad:</label>\
                <input type="hidden" name="id" value="'+res.data.id+'" />\
                <input name="descripcion" value="'+res.data.descripcion+'" type="text" class="form-control abm-inputs" id="tipo-actividad" placeholder="Tipo">\
                <input type="submit" class="btn btn-primary actualizar" name="action" value="actualizar">';
                /*<button type="submit" class="btn btn-primary actualizar">Actualizar</button>';*/

                    $form.append(html);
                }
                
            });
            
            form.fail(function(res){
                console.log(res);
            });
            
            
        }
        
    }
    
    
    var listarDatos = function(){
        
        var listar = $.ajax({
            url: URI.LISTAR,
            method: 'GET',
            dataType: 'json'
        });
        
        listar.done(function(res){
            console.log(res);
            
            if(!res.error){
                
                $listado.html("");
                
                res.data.forEach(function(dato){
                    
                    var html = '<tr> \
                    <td class="acti-tipoDescripcion">'+dato.descripcion+'</td> \
                    <td> \
                        <input type="hidden" name="id" value="'+dato.id+'"/> \
                        <button type="click" class="btn btn-success actualizar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button> \
                        <button type="click" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button> \
                    </td> \
                </tr>';
                    
                    $listado.append(html);
                
                });
            }
        })
        
        listar.fail(function(res){
            console.log(res);
        })
    }
    
    miFormulario();
    listarDatos();

})(jQuery);