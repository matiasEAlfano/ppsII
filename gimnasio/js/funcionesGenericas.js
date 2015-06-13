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
                    html += '<option value="0">Seleccione un Tipo</option>';
                    res.data.forEach(function(tipos){
                        
                        html += '<option value="'+tipos.id_tipo_producto+'">'+tipos.nombre_tipo_producto+'</option>';
                        
                    });
                    $("#tipo-producto").html(html);
                }
            }); 
    });

})(jQuery);