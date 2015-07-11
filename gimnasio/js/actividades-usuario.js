(function($){

	$lista = $("#tipos_Actividades");
	$grupos = $("#grupos_Actividades");
	$Titulo = $("#tituloTipo");
	var uri = {
		grupos:"actions/action-actividad-listar.php",
		tipos:"actions/action-actividad-listar.php?action=getTipos",
		actividades :"actions/action-actividad-listar.php"
	};

	var getTipos = function(){

		var listado = $.ajax({
			url: uri.tipos,
			method:'GET',
			dataType:'json'
			
		});

		listado.done(function(res){

			if(!res.error){
				$lista.html("");
				res.data.forEach(function(tipo){

					var html='<li id="'+tipo.id+'"><a href="#">'+tipo.Descripcion+'</a></li>'
					$lista.append(html);
				});
			};

			$("#tipos_Actividades li:first-child").click();
		});
	};


	var getGrupos = function(idTipo){
		
		var listado = $.ajax({
			url: uri.grupos,
			method:'POST',
			dataType:'json',
			data:{
				idTipo: idTipo,
				action : 'getGrupos'
			}
		});

		listado.done(function(res){

			if(!res.error){
				$grupos.html("");
				res.data.forEach(function(grupo){
					var html='<li id="grupo'+grupo.id+'" 	><h4>'+grupo.descripcion+'</h4></li>'
					$grupos.append(html);
					getActividades(grupo.id)

				});
			};
		});
	};

	var getActividades = function(idGrupo){
		var listado= $.ajax({
			url: uri.actividades,
			method:"GET",
			dataType:"json",
			data:{
				idGrupo:idGrupo,
				action : 'getActividades'
			}		
		});

		listado.done(function(res){
			$listaGrupo=$("#grupo"+idGrupo);

			if(!res.error){
				var html = "<ul>";
				res.data.forEach(function(actividad){
					html+='<li ><h5>'+actividad.nombre+'</h5></li>';
					
				});
				html += "</ul>";
				$listaGrupo.append(html);
			};
		});

	}



	$("#tipos_Actividades").on("click","li",function(){
		$Titulo.html($(this).text());
		var id = $(this).attr("id");
		getGrupos(id);
	});



	getTipos();


})(jQuery)