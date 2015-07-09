(function($){
    
    $form = $("#form-buscar"); 
    
    $form.on("submit", function(event){
        event.preventDefault();
        listarBusqueda();
    });
    
    //intento de manejar combos desde un unico evento:
    /*$form.on("change", ".combo", function(event){
        alert($(this).find);
        var idActividad = $(this).val();
        filtroPorActividad(idActividad);
    });*/
    
    $form.on("change", "#cboActividad", function(event){
        var idActividad = $(this).val();
        filtroPorActividad(idActividad);
    });
    
    
    $form.on("change", "#cboProfesor", function(event){
        var idProfesor = $(this).val();
        filtroPorProfesor(idProfesor);
    });
    
    
    var URI = {
        COMBO_ACTIVIDADES: "actions/api-reservas.php?action=getActividades",
        COMBO_PROFESORES: "actions/api-reservas.php?action=getProfesores",
        COMBO_DIAS: "actions/api-reservas.php?action=getDias",
        LISTAR: "actions/api-reservas.php?action=listar",
        FILTRO_ACTIVIDAD: "actions/api-reservas.php?action=filtroPorActividad",
        FILTRO_PROFESOR: "actions/api-reservas.php?action=filtroPorProfesor",
        FILTRO_DIA: "actions/api-reservas.php?action="
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
                                    <td>Martes - '+dato.fecha_profesor_actividad+'</td>\
                                    <td>'+dato.horario_desde_profesor_actividad+' a '+dato.horario_hasta_profesor_actividad+'</td>\
                                    <td>'+dato.cupo+'</td>\
                                    <td>\
                                        <input type="hidden" name="id_calendario_profesor_actividad" value="'+dato.id_calendario_profesor_actividad+'">\
                                        <button type="button" class="btn btn-success" aria-label="Left Align" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>\
                                    </td>\
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
        
        //carga Combo de Actividades:
        var listarActividades = $.ajax({
            url: URI.COMBO_ACTIVIDADES,
            method: 'get',
            dataType: 'json'
        });
        
        listarActividades.done(function(res){
            console.log(res);
            
            if(!res.error){                
                var html = '<option value="0">- Todas -</option>'
                $(".col-actividad select").append(html);
                
                res.data.forEach(function(actividad){
                    var html = '<option value="'+actividad.id_actividad+'">'+actividad.nombre+'</option>';           
                    $(".col-actividad select").append(html);
                    
                });
            }else{
                console.error("Ocurrio un error");
            }
        
        });
        
        
        //carga Combo de Profesores:
        var listarProfesores = $.ajax({
            url: URI.COMBO_PROFESORES,
            method: 'get',
            dataType: 'json'
        });
        
        listarProfesores.done(function(res){
            console.log(res);
            
            if(!res.error){
                var html = '<option value="0">- Todos -</option>'
                $(".col-profesor select").append(html);
                
                res.data.forEach(function(profesor){
                    var html = '<option value="'+profesor.id_profesor+'">'+profesor.profesor_nombre_apellido+'</option>';
                    $(".col-profesor select").append(html);
                });
            }
        });
        
        
        //carga Combo de Dias:
        var listarDias = $.ajax({
            url: URI.COMBO_DIAS,
            method: 'get',
            dataType: 'json'
        });
        
        listarDias.done(function(res){
            console.log(res);
            
            if(!res.error){
                var html = '<option value="0">- Todos -</option>'
                $(".col-dia select").append(html);
                
                res.data.forEach(function(dia){
                    var html = '<option value="'+dia.id_dia+'">'+dia.dia_nombre+'</option>';               
                    $(".col-dia select").append(html);                    
                });
            }
        });
        
    }
    
    
    var filtroPorActividad = function(id){
        
        var cargar = $.ajax({
            url: URI.FILTRO_ACTIVIDAD,
            method: 'get',
            data: {id: id},
            dataType: 'json'
        });

        cargar.done(function(res){
            console.log(res);

            if(!res.error){                    
                $(".col-profesor select").html("");
                var html = '<option value="0">- Todos -</option>';
                $(".col-profesor select").append(html);

                res.data.forEach(function(profesor){
                    var html = '<option value="'+profesor.id_profesor+'">'+profesor.profesor_nombre_apellido+'</option>';

                    $(".col-profesor select").append(html);
                });
            }else{
                console.error("Ocurrio un error");
                alert("No hay profesores asignados a la actividad seleccionada!")
            }
        });

        cargar.fail(function(res){
            console.log(res);
        });
    }
    
    
    var filtroPorProfesor = function(id){
        var cargar = $.ajax({
            url: URI.FILTRO_PROFESOR,
            method: 'get',
            data: {id: id},
            dataType: 'json'
        });

        cargar.done(function(res){
            console.log(res);

            if(!res.error){                    
                $(".col-actividad select").html("");
                var html = '<option value="0">- Todas -</option>';
                $(".col-actividad select").append(html);

                res.data.forEach(function(actividad){
                    var html = '<option value="'+actividad.id_actividad+'">'+actividad.nombre+'</option>';

                    $(".col-actividad select").append(html);
                });
            }else{
                console.error("Ocurrio un error");
                alert("El profesor seleccionado no dicta la actividad seleccionada!")
            }
        });

        cargar.fail(function(res){
            console.log(res);
        });
    }
        
    
    cargarCombos();
    
    
})(jQuery);