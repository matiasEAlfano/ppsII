(function($){
    
    $("#categoria-producto").on("change", function() {

        var idCategoria = $("#categoria-producto").val();

        var URI = {};
        URI.RELOAD_COMBOS = "actions/api-combosReload.php?action=reloadTipoProducto";
    
        $.ajax({
            url: URI.RELOAD_COMBOS,
            data: { categoria: idCategoria },
            method : 'GET',
            dataType : 'json'
        }).done(function(res){
                var html;         
                if(!res.error){
                    html += '<option value="0">Seleccione un tipo</option>';
                    res.data.forEach(function(tipos){
                        
                        html += '<option value="'+tipos.id_tipo_producto+'">'+tipos.nombre_tipo_producto+'</option>';
                        
                    });
                    $("#tipo-producto").html(html);
                }
            }); 
    });
    
    /*$(".add-to-car").on("click", function(){
        var producto = {};
        producto.idProducto = $(".add-producto").val();
        producto.idTalle = $(".add-talle").val();
        producto.cantidad = $(".add-cantidad").val();
        
        var URI = {};
        URI.ADD_PRODUCTO = "actions/api-addToCar.php?action=addToCar";
        
        $.ajax({
            url: URI.RELOAD_COMBOS,
            data: {idProducto: producto.idProducto, 
                   idTalle: producto.idTalle, 
                   cantidad: producto.cantidad},
            method : 'GET',
            dataType : 'json'
        }).done(function(res){
                if(!res.error){
                    res.data.forEach(function(detalleProducto){
                        console.log(detalleProducto)
                        var html='<tr class="item-carrito">\
                                <td>\
                                    <div class="img-producto">'+detalleProducto.imagen+'</div>\
                                    <div class="detalle-producto">'+detalleProducto.tipo+ ''+detalleProducto.marca+ ''+detalleProducto.descripcion+'</div>\
                                    <div class="edit-producto"><a href="#">Eliminar</a></div>\                                              </td>\
                                <td>\
                                    <select>\
                                        <option value="1">1</option>\
                                        <option value="2">2</option>\
                                        <option value="3">3</option>\
                                        <option value="4">4</option>\
                                        <option value="5">5</option>\
                                    </select>\
                                </td>\
                                <td>'+detalleProducto.precio+'</td>\
                            </tr>\
                            <tr>\
                                <td colspan="3">\
                                    <span class="pull-right"><b>Total</b></span>\
                                </td>\
                                <td>\
                                    <span>$3029</span>\
                                </td>\
                            </tr>';                        
                        
                        $("#detalle-carrito tbody").append(html);    
                    });
                    
                }
            });
    });*/
    
            
    var productos = Array();
    var producto = {};
    /*
    $(".add-to-car").on("click", function(){
        
        producto.idProducto = $(".add-producto").val();
        producto.idTalle = $(".add-talle").val();
        producto.cantidad = $(".add-cantidad").val();
        
        productos.push(producto);
        
        console.dir(producto);
        console.dir(productos);
    });*/
    
    /*$(".list-car").on("click", function(){
        
        for (i=0; i < productos.length; i++){
            console.dir(productos[i]);
        }
        
        var URI = {};
        URI.ADD_PRODUCTO = "actions/api-addToCar.php?action=addToCar";
        
        $.ajax({
            url: URI.RELOAD_COMBOS,
            data: {idProducto: producto.idProducto, 
                   idTalle: producto.idTalle, 
                   cantidad: producto.cantidad},
            method : 'GET',
            dataType : 'json'
        }).done(function(res){
                if(!res.error){
                    res.data.forEach(function(detalleProducto){
                        console.log(detalleProducto);
        
    });*/

})(jQuery);

function addCarrito(idProducto){
    
    var talle_producto = "talle_" + idProducto;
    
    var cantidad_producto = "cantidad_" + idProducto;
    
    var talle = $("#" + talle_producto).val();
    
    if(talle==0){
        alert("cargar talle");
        return false;
    }    
    
    var cantidad = $("#" + cantidad_producto).val();
    if(cantidad==0){
        alert("Cargar Cantidad");
        return false;
    }  
    
    $.ajax({
        url: "actions/api-addToCar.php",
        data: {idProducto: idProducto, 
               idTalle: talle, 
               cantidad: cantidad,
               action: "add"},
        method : 'GET'
    }).done(function(res){
        okProducto();
    });
}

function removeCarrito(idProducto){
        
    $.ajax({
        url: "actions/api-addToCar.php",
        data: {idProducto: idProducto,
               action: "remove"},
        method : 'GET'
    }).done(function(res){
        location.reload();    
    });
    
}

function okProducto(){
  $.growlUI('Carrito', 'Se agrego un nuevo producto!'); 
}

function block(){
    $.blockUI({message: "Espere un momento por favor ..."}); 
}

function unblock(){
    $.unblockUI();
}

function login(){
    
    // validar usuario y password
    var usuario = $("#usuario").val();
    var password = $("#password").val();
    
   $.ajax({
        url: "api-login.php",
        data: {usuario: usuario,
               password: password
              },
        method : 'POST'
    }).done(function(res){
        location.reload();    
    });
        
    
    
} 
