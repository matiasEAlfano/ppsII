(function($){
    
    $listar = $("#listar");
    $panel = $("#panel_usuario");
    
    
    //LLAMA A LA FUNCION QUE MUESTRA LOS DATOS DEL USUARIO
    $panel.on("click", ".datos_usuario", function(){
        //trae el id que esta en el input:
        var id = $(".id_usuario").val();
        listarDatosPersonales(id);
    });
    
    
    //LLAMA A LA FUNCION QUE LISTA LAS COMPRAS DEL USUARIO
    $panel.on("click", ".mis_compras", function(){
        var id = $(".id_usuario").val();
        listarMisCompras(id);
    });
    
    
    //LLAMA A LA FUNCION QUE LISTA LA RESERVAS DEL USUARIO
    $panel.on("click", ".mis_reservas", function(){
        var id = $(".id_usuario").val();
        listarMisReservas(id);
    });
    
    
    //MODAL: INFORMA QUE NO HAY PRODUCTOS EN EL CARRITO
    $panel.on("click", "a.mi_carrito", function(){
        $panel.find("div.contenido").html("");
        
        var html = '<div class="modal-body">\
                        <h4 class="modal-title">No tienes productos en el carrito.</h4>\                                       </div>\
                    <div class="modal-footer">\
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>\
                    </div>';
        
        $panel.find("div.contenido").append(html);
    });
    
    
    //MODAL: CONFIRMAR CANCELACION DE RESERVA
    $listar.on("click", "a.cancelar-reserva", function(){
        var id = $(this).closest("td").find("#id-reserva").val();
        
        $panel.find("div.contenido").html("");
        
        var html = '<div class="modal-body">\
                    <h4 class="modal-title">Seguro que quieres cancelar esta reserva?</h4>\
                                    </div>\
                                    <div class="modal-footer">\
                                        <input type="hidden" name="id-reserva" value="'+id+'">\
                                        <button id="cancelar-reserva"type="button" class="btn btn-success" data-dismiss="modal">Confirmar</button>\
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>\
                                    </div>';
        
        $panel.find("div.contenido").append(html);     
    });
    
    //LLAMA A LA FUNCION QUE EJECUTA EL CANCELAR RESERVA
    $panel.on("click", "#cancelar-reserva", function(){
        var id = $(this).closest("div").find("input[name=id-reserva]").val();
        cancelarReserva(id);
    });
    
    
    //LLAMA A LA FUNCION QUE EJECUTA EL RESUMEN DEL USUARIO
    $panel.on("click", "a.resumen", function(){
        resumen();
    });
    
    
    var URI = {
        MI_CUENTA: 'actions/api-miCuenta.php'
    };
    
    
    var resumen = function(){
        $listar.html("");
        
        var html = '<div class="col-md-6">\
                    </div>\
                    <div class="col-md-3">\
                        <div class="row">\
                            <label>Ultima Actividad calificada:</label>\
                            <li>Spinning</li>\
                            <label>Calificacion:</label>\
                            <li>Excelente</li>\
                        </div>\
                        <div class="row">\
                            <label>Actividades Reservadas:</label>\
                            <table class="table table-hover">\
                                      <thead>\
                                        <tr>\
                                          <th>Actividad</th>\
                                          <th>Fecha</th>\
                                        </tr>\
                                      </thead>\
                                      <tbody>\
                                        <tr>\
                                          <td>Bodycombat</td>\
                                          <td>10/05/2015</td>\
                                        </tr>\
                                        <tr>\
                                          <td>IndoorCycle</td>\
                                          <td>12/05/2015</td>\
                                        </tr>\
                                        <tr>\
                                          <td>Localizada</td>\
                                          <td>13/05/2015</td>\
                                        </tr>\
                                        <tr>\
                                          <td>Aquagym</td>\
                                          <td>17/05/2015</td>\
                                        </tr>\
                                      </tbody>\
                                </table>\
                        </div>\
                    </div>';
        
        $listar.append(html);
        
    }
    
    
    var cancelarReserva = function(id){
        var cancelar = $.ajax({
            url: URI.MI_CUENTA,
            method: 'POST',
            data: {idReserva: id,
                  action: 'cancelarReserva'}
        });
        
        cancelar.done(function(res){
            console.log(res);
            
            if(!res.error){
                var id = $(".id_usuario").val();
                listarMisReservas(id);
            }
        });
        
        cancelar.fail(function(res){
            console.log(res);
        });
    }
    
    
    var listarMisReservas = function(id){
        var listarReservas = $.ajax({
            url: URI.MI_CUENTA,
            method: 'GET',
            data: {idUsuario: id,
                  action: 'reservas'},
            dataType: 'json'
        });
        
        listarReservas.done(function(res){
            console.log(res);
            
            if(!res.error){
                //Borro el listado:
                $listar.html("");
                
                //Cargo la cabecera fuera del ForEach para que no se repita:
                var html = '<h3>Mis Reservas de Actividades:</h3><br>\
                                <table class="table">\
                                <thead>\
                                    <tr>\
                                        <th>Fecha</th>\
                                        <th>Actividad</th>\
                                        <th>Horario</th>\
                                        <th>Profesor</th>\
                                    </tr>\
                                </thead>\
                                <tbody>';
                
                //Cargo las filas de la tabla:
                res.data.forEach(function(dato){
                    
                        html += '<tr>\
                                    <td>'+dato.fecha_profesor_actividad+'</td>\
                                    <td>'+dato.nombre+'</td>\
                                    <td>'+dato.horario_desde_profesor_actividad+' a '+dato.horario_hasta_profesor_actividad+'</td>\
                                    <td>'+dato.profesor_nombre_apellido+'</td>\
                                    <td>\
                                        <input id="id-reserva" type="hidden" name="idReserva" value="'+dato.id_reserva+'">\
                                        <a class="cancelar-reserva" data-toggle="modal" data-target=".mi-modal">Cancelar</a>\
                                    </td>\
                                </tr>';
                    
                });
                
                //concateno el cierre de la tabla
                 html += '</tbody>\
                            </table>\
                                    </td>\
                                </tr>';
                
                $listar.append(html);
                    
            }else{
                $listar.html("");
                console.error("Error al listar reservas")
            }
        });
        
        listarReservas.fail(function(res){
            console.error(res);
        })
    }
    
    
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
                        html += '<h3>Mis Compras:</h3><br>\
                                <table class="table">\
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
                                                <th>Sub-Total</th>\
                                            </tr>\
                                        </thead>\
                                        <tbody>';
                    
                    for($i=0; $i<compra["detalle"].length; $i++){
                        
                                    html += '<tr>\
                                                <td><img style="width: 60px" src='+compra["detalle"][$i].producto_imagen+'><br>'+compra["detalle"][$i].producto_descripcion+" ("+compra["detalle"][$i].marca_nombre+')</td>\
                                                <td>'+compra["detalle"][$i].talle_nombre+'</td>\
                                                <td>'+compra["detalle"][$i].cantidad+'</td>\
                                                <td>$'+compra["detalle"][$i].precio+'</td>\
                                                <td>$'+compra["detalle"][$i].cantidad * compra["detalle"][$i].precio+'</td>\
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
                var password = "";
                //Para mostrar los caracteres de la clave como asteriscos:
                for(i=0; i<dato.clave.length; i++){
                    password += "*";
                }                
                
                var html = '<h3>Mis Datos:</h3><br>\
                            <h4>Datos de cuenta:</h4>\
                            <label>Usuario:</label>'+" "+dato.email+'\
                            <br>\
                            <label>Contraseña:</label>'+" "+password+'\
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
    
    resumen();
    
})(jQuery);