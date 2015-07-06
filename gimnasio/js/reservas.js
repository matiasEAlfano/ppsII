(function($){
    
    $form = $("#form-buscar"); 
    
    $form.on("submit", function(event){
        event.preventDefault();
        listarBusqueda();
    })
    
    var URI = {
        COMBO_ACTIVIDADES: "actions/api-reservas.php?action=getActividades",
        COMBO_PROFESORES: "actions/api-reservas.php?action=getProfesores",
        COMBO_DIAS: "actions/api-reservas.php?action=getDias",
        LISTAR: "actions/api-reservas.php?action=listar"
    }
    
    
    var listarBusqueda = function(){
        var listar = $.ajax({
            url: URI.LISTAR,
            method: 'get',
            data: $form.serialize(),
            dataType: 'json'
        });
        
        listar.done(function(res){
            console.log(res);
                        
            if(!res.error){                
                $(".calendarios tbody").html("");
                
                res.data.forEach(function(dato){
                    var html = '<tr>\
                                    <td>'+dato.nombre+'</td>\
                                    <td>'+dato.profesor_nombre_apellido+'</td>\
                                    <td>Martes</td>\
                                    <td>10:00AM</td>\
                                    <td>24</td>\
                                    <td><button type="button" class="btn btn-success" aria-label="Left Align" data-toggle="modal" data-target=".bs-example-modal-sm">\
      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>\
    </button></td>\
                                </tr>';
                    
                    $(".calendarios tbody").append(html);
                });
            }
        });
        
        listar.fail(function(res){
            console.error(res);
        });
    }
    
    var cargarCombos = function(){
        
        //carca Cobo de Actividades:
        var listarActividades = $.ajax({
            url: URI.COMBO_ACTIVIDADES,
            method: 'get',
            dataType: 'json'
        });
        
        listarActividades.done(function(res){
            console.log(res);
            
            if(!res.error){
                
                res.data.forEach(function(actividad){
                    var html = '<option value="'+actividad.id+'">'+actividad.nombre+'</option>';
                    
                    $(".col-actividad select").append(html);
                    
                });
            }else{
                console.error("Ocurrio un error");
            }
        
        });
        
        
        //carca Cobo de Profesores:
        var listarProfesores = $.ajax({
            url: URI.COMBO_PROFESORES,
            method: 'get',
            dataType: 'json'
        });
        
        listarProfesores.done(function(res){
            console.log(res);
            
            if(!res.error){
                res.data.forEach(function(profesor){
                    var html = '<option value="'+profesor.id_profesor+'">'+profesor.profesor_nombre_apellido+'</option>';
                    
                    $(".col-profesor select").append(html);
                });
            }
        });
        
        
        //carca Cobo de Dias:
        var listarDias = $.ajax({
            url: URI.COMBO_DIAS,
            method: 'get',
            dataType: 'json'
        });
        
        listarDias.done(function(res){
            console.log(res);
            
            if(!res.error){
                res.data.forEach(function(dia){
                    var html = '<option value="'+dia.id_dia+'">'+dia.dia_nombre+'</option>';
                    
                    $(".col-dia select").append(html);                    
                });
            }
        });
        
    }
    
    cargarCombos();
    
    
})(jQuery);