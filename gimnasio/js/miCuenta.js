(function($){
    
    $datosUsuario = $("#listar-datos-usuario");
    
    $("#option_list").on("click", ".datos-usuario", function(){
        var id = $(this).data("tag-id");
        showDatosPersonales(id);
    });
    
    $("#option_list").on("click", ".datos-usuario", function(){
        var id = $(this).data("tag-id");
        showMisCompras(id);
    });
    
    
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
                    var html =
                        
                    
                });
            }
        });
    }
    
    
    var showDatosPersonales = function(id){
        
        var listarDatos = $.ajax({
            url: URI.MI_CUENTA,
            method: 'GET',
            data: {idUsuario: id,
                   action: 'listar'},
            dataType: 'json'
        });
        
        listarDatos.done(function(res){        
            console.log(res);
        
            if(!res.error){
                res.data.forEach(function(dato){
                    var html = '<h3>Datos Personales</h3>\
                                <h4>Datos de cuenta:</h4>\
                        <label>Usuario:</label>'+dato.email+'\
                        <h4>Datos personales:</h4>\
                        <label>Nombre:</label>'+dato.nombre+'\
                        <br>\
                        <label>Apellido:</label>'+dato.apellido+'\
                        <br>\
                        <label>Dni:</label>'+dato.dni+'\
                        <br>\
                        <h4>Domicilio:</h4>\
                        <label>Direccion:</label>'+dato.direccion+'\
                        <br>\
                        <label>CP:</label>'+dato.cp+'\
                        <br>\
                        <label>Localidad:</label>'+dato.localidad+'\
                        <br>\
                        <label>Telefono:</label>'+dato.telefono+'';

                    $datosUsuario.append(html);
                });
            }else{
                alert("ocurrio un error");
            }
        });
        
        listarDatos.fail(function(res){
            alert("ocurrio un error");
        });
    }
    
})(jQuery);