(function($){
    $form = $("#form-datos-usuario");
    $listado = $("#listar-datos-usuario div");
    
    var URI = {
        LISTAR_DATOS: 'actions/api-datos-usuario.php?actions=listar',
        GUARDAR_DATOS: 'actions/api-datos-usuario.php?actions=guardar',    
    };
    
    var limpiarForm = function(){
        $form.find("input").val("");
    };
    
    //PARA LISTAR LOS DATOS DEL USUARIO:
    var getListado = function(){
        var listado = $.ajax({
            url: URI.LISTAR_DATOS,
            method: 'GET',
            dataType: 'json'
        });
        
        listado.done(function(res){
            console.log(res);
            if(!res.error){
                //borro el listado actual:
                $listado.html("");
                res.data.forEach(function(dato){
                    var html = '<label for="nombre">Nombre:</label>'+dato.nombre+'\
                    <label for="nombre">Apellido:</label>'+dato.apellido+'\
                    <label for="nombre">Dni</label>'+dato.dni+'\
                    <label for="nombre">Direccion</label>'+dato.direccion+'\
                    <label for="nombre">CP</label>'+dato.cp+'\
                    <label for="nombre">Localidad</label>'+dato.localidad+'\
                    <label for="nombre">Telefono</label>'+dato.telefono+'';
                    
                    $listado.append(html);
                });
            }
        });
    }
    
    //PARA GUARDAR DATOS DEL USUARIO:
    $form.on("submit", function(event){
        //Evito que se resuelva el submit del form
        //IMPORTANTE, de lo contrario, los datos se enviaran recargando la página
        event.preventDefault;
        
        var postDatos = $.ajax({
            uri: URI.GUARDAR_DATOS,
            method: 'POST',
            data: $form.serialize()
        });
        
        postDatos.done(function(res){
            if(!res.error){
                //vuelvo a cargar los datos personales.
                getListado();
            }else{
                console.error("Error al guardar datos personales");
            }
        });
        
        postDatos.fail(function(res){
            console.error("Error al guardar datos personales");
        });
        
        postDatos.always(function(res){
            //Esto se ejecuta siempre que el servidor conteste,
            //tanto en caso de exito como de fallo
            limpiarForm();
        });
    });
    
    getListado();

})(jQuery);