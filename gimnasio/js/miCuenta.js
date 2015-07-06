(function($){
    
    $listar = $("#listar");
    $panel = $("#panel_usuario");
    
    $panel.on("click", ".datos_usuario", function(){
        //trae el id que esta en el input:
        var id = $(".id_usuario").val();
        listarDatosPersonales(id);
    });
    
    $panel.on("click", ".mis_compras", function(){
        var id = $(".id_usuario").val();
        listarMisCompras(id);
    });
    
    
    var URI = {
        MI_CUENTA: 'actions/api-miCuenta.php'
    };    
    
    
    var listarMisCompras = function(id){
        var listarCompras = $.ajax({
            url: URI.MI_CUENTA,
            method: 'GET',
            data: {idUsuario: id,
                   action: 'compras'},
            dataType: 'json'
        });
        
        listarCompras.done(function(res){
                console.log(res.data);
            
            if(!res.error){
                
                $listar.html("");
                var html="";
                var indice = 0; 
                var cantidad = res.data.length - 1;
                
                res.data.forEach(function(compra){
                    
                    if(indice==0){
                        html += '<table class="table">\
                                <thead>\
                                    <tr>\
                                        <th>Fecha</th>\
                                        <th>Medio de Pago</th>\
                                        <th>Total</th>\
                                    </tr>\
                                </thead>\
                                <tbody id="body-micarrito">';
                    }
                    
                    html += '<tr>\
                                <td>'+compra.fecha_venta+'</td>\
                                <td>'+compra.tarjetas_tipo+": <br>xxxx-"+compra.tarjeta_numero.substring(12, 16)+'</td>\
                                <td>'+"$"+compra.total_venta+'</td>\
                                <td>\
                                    <input type="hidden" class="id_venta" name="id_venta_'+compra.id_venta+'" value="'+compra.id_venta+'">\
                                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#'+compra.id_venta+'" aria-expanded="false" aria-controls="collapseExample">Detalle</a>\
                                </td>\
                            </tr>\
                            <tr class="collapse" id="'+compra.id_venta+'">\
                                <td colspan="4">\
                                    <table class="table">\
                                        <thead>\
                                            <tr>\
                                                <th>Producto</th>\
                                                <th>Talle</th>\
                                                <th>Cantidad</th>\
                                                <th>Precio Unitario</th>\
                                            </tr>\
                                        </thead>\
                                        <tbody>';
                    
                    for($i=0; $i<compra["detalle"].length; $i++){
                        
                                    html += '<tr>\
                                                <td><img style="width: 60px" src='+compra["detalle"][$i].producto_imagen+'><br>'+compra["detalle"][$i].producto_descripcion+" ("+compra["detalle"][$i].marca_nombre+')</td>\
                                                <td>'+compra["detalle"][$i].talle_nombre+'</td>\
                                                <td>'+compra["detalle"][$i].cantidad+'</td>\
                                                <td>'+compra["detalle"][$i].precio+'</td>\
                                            </tr>';
                    }
                    
                    html +=   '</tbody>\
                            </table>\
                        </td>\
                    </tr>';
                    
                    if(cantidad==indice){
                        html += '</tbody>\
                            </table>';                        
                        $listar.append(html);
                    }
                    indice++;                   
                });               
            }
        });
        
        listarCompras.fail(function(res){
            console.error("Error a traer las compras");
            console.log(res);
        });
    }
    
    /*$listar.on("click", "tr a", function(){
        alert($(".id_venta").val());
        $("#24o").slideToggle();
        $("#24o").removeClass("hidden");
    });*/
    
    var listarDatosPersonales = function(id){
        
        var listarDatos = $.ajax({
            url: URI.MI_CUENTA,
            method: 'GET',
            data: {idUsuario: id,
                   action: 'datosPersonales'},
            dataType: 'json'
        });
        
        listarDatos.done(function(res){        
            
            console.log(res);
        
            if(!res.error){
                
                $listar.html("");
                
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

                $listar.append(html);
                
            }else{
                alert("ocurrio un error");
            }
        });
        
        listarDatos.fail(function(res){
            console.log("Error al listar datos de usuario");
        });
    }
    
})(jQuery);