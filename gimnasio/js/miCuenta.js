(function($){
    
    /*$("#datos_personales").on("click", function(){
            alert("Datos Personales");
    });*/
    $("#datos_personales", function(id){
        alert($id);
    });
    
    
    var URI = {
        DATOS_PERSONALES: 'actions/api-MiCuenta.php' 
    };
    
    var showDatosPersonales = function(id){
        
        var listarDatos = $.ajax({
            url: URI.DATOS_PERSONALES,
            method: 'GET',
            data: {idUsuario: id},
            dataType: 'json'
        });
        
        listarDatos.done(function(re){        
        console.log(res);
        
            if(!res.error){
                res.data.forEach(function(dato){
                    var html = '<h3>Datos Personales</h3>\
                                <h4>Datos de cuenta:</h4>\
                        <label>Usuario:</label><?php echo " " . $_SESSION["usuario"]["email"]?>\
                        <h4>Datos personales:</h4>\
                        <label>Nombre:</label><?php echo " " . $datosUsuario["datos_usuario_nombre"]?>\
                        <br>\
                        <label>Apellido:</label><?php echo " " . $datosUsuario["datos_usuario_apellido"]?>\
                        <br>\
                        <label>Dni:</label><?php echo " " . $datosUsuario["datos_usuario_dni"]?>\
                        <br>\
                        <h4>Domicilio:</h4>\
                        <label>Direccion:</label><?php echo " " . $datosUsuario["datos_usuario_direccion"]?>\
                        <br>\
                        <label>CP:</label><?php echo " " . $datosUsuario["datos_usuario_cp"]?>\
                        <br>\
                        <label>Localidad:</label><?php echo " " . $datosUsuario["datos_usuario_localidad"]?>\
                        <br>\
                        <label>Telefono:</label><?php echo " " . $datosUsuario["datos_usuario_telefono"]?>';

                    $datos.append(html);
                });
            }
        });
    }
    
})(jQuery);