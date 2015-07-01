(function($){
    
    $listarDatosUsuario = $("#listar-datos-usuario");
    $panel = $("#panel_usuario");
    
    $panel.on("click", ".datos_usuario", function(){
        //trae el id que esta en el input:
        var id = $(".id_usuario").val();
        listarDatosPersonales(id);
    });
    
    /*$("#option_list").on("click", ".datos-usuario", function(){
        var id = $(this).data("tag-id");
        showMisCompras(id);
    });*/
    
    
    var URI = {
        MI_CUENTA: 'actions/api-miCuenta.php'
    };    
    
    var showMiscompras = function(id){
        var listarCompras = $.ajax({
            url: URI.MI_CUENTA,
            method: 'GET',
            data: {idUsuario: id,
                   action: 'compras'},
            dataType: 'json'
        });
        
        listarCompras.done(function(res){
            console.log(res);
            if(!res.error){
                res.data.forEach(function(compra){
                    var html = 'asd';
                        
                    
                });
            }
        });
    }
    
    
    var listarDatosPersonales = function(id){
        
        var listar = $.ajax({
            url: URI.MI_CUENTA,
            method: 'GET',
            data: {idUsuario: id,
                   action: 'listar'},
            dataType: 'json'
        });
        
        listar.done(function(res){        
            
            console.log(res);
        
            if(!res.error){
                
                $listarDatosUsuario.html("");
                
                var dato = res.data;
                var html = '<h3>Datos Personales</h3>\
                            <h4>Datos de cuenta:</h4>\
                            <label>Usuario:</label>'+" "+dato.email+'\
                            <h4>Datos personales:</h4>\
                            <label>Nombre:</label>'+" "+dato.datos_usuario_nombre+'\
                            <br>\
                            <label>Apellido:</label>'+" "+dato.datos_usuario_apellido+'\
                            <br>\
                            <label>Dni:</label>'+" "+dato.datos_usuario_dni+'\
                            <br>\
                            <h4>Domicilio:</h4>\
                            <label>Direccion:</label>'+" "+dato.datos_usuario_direccion+'\
                            <br>\
                            <label>CP:</label>'+" "+dato.datos_usuario_cp+'\
                            <br>\
                            <label>Localidad:</label>'+" "+dato.datos_usuario_localidad+'\
                            <br>\
                            <label>Telefono:</label>'+" "+dato.datos_usuario_telefono+'';

                $listarDatosUsuario.append(html);
                
            }else{
                alert("ocurrio un error");
            }
        });
        
        listarDatos.fail(function(res){
            console.log("Error al listar datos de usuario");
        });
    }
    
})(jQuery);