(function($){

	$marcas=$("#buscarMarca");
	$categorias=$("#buscarCategoria");
	$productos=$("#listaCompra");
	var uri = {
		marcas:"actions/api-filtroCarrito.php",
		categoria:"actions/api-filtroCarrito.php",
		producto:"actions/api-filtroCarrito.php",
		talles:"actions/api-filtroCarrito.php"
		
	};

	var getMarcas = function(){
		var listado = $.ajax({
			url: uri.marcas,
			method:'GET',
			dataType:'json',
			data:{
				action:"getMarcas"
			}

			
		});

		listado.done(function(res){
			//console.log(res);

			if(!res.error){
				$marcas.html("");
				$marcas.html('<div class="radio radioFiltro">\
						  <label>\
						    <input type="radio" name="radioMarca" value="-1" checked="checked">\
						    Todos\
						  </label>\
						</div>');
				res.data.forEach(function(marca){
						var html='<div class="radio radioFiltro">\
						  <label>\
						    <input type="radio" name="radioMarca" id="marca"'+marca.id_marca+' value="'+marca.id_marca+'">\
						    '+marca.marca_nombre+'\
						  </label>\
						</div>'
					$marcas.append(html);
				});
			};
		});
	};



	var getcategorias = function(){
		var listado = $.ajax({
			url: uri.categoria,
			method:'GET',
			dataType:'json',
			data:{
				action:"getCategorias"
			}

			
		});

		listado.done(function(res){
			//console.log(res);

			if(!res.error){
				$categorias.html("");
				$categorias.html('<div class="radio radioFiltro">\
						  <label>\
						    <input type="radio" name="radioCat"  value="-1" checked="checked">\
						    Todos\
						  </label>\
						</div>');
				res.data.forEach(function(cat){
						var html='<div class="radio radioFiltro">\
						  <label>\
						    <input type="radio" name="radioCat" id="cat"'+cat.id_categoria+' value="'+cat.id_categoria+'">\
						    '+cat.categoria_nombre+'\
						  </label>\
						</div>'
					$categorias.append(html);
				});
			};
		});
	};

	var getProductos = function(){

		var marcas = $("#buscarMarca input[type='radio']:checked").val();
		var categoria = $("#buscarCategoria input[type='radio']:checked").val();

		if(typeof(marcas) == "undefined"){marcas = "-1"};
		if(typeof(categoria) == "undefined"){categoria = "-1"};		

		var listado = $.ajax({
			url: uri.producto,
			method:'GET',
			dataType:'json',
			data:{
				action:"getProductos",
				Marca: marcas,
				cat : categoria
			}

			
		});

		listado.done(function(res){
			//console.log(res);

			if(!res.error){
				$productos.html("");

				res.data.forEach(function(prod){
					var html='<li class="item">\
                                <img src="'+prod.producto_imagen+'" alt="img">\
                                <input class="add-producto" name="id_producto" type="hidden" value="'+prod.id_producto+'">\
                                <p>\
                                    <b>'+prod.marca_nombre+' '+ prod.producto_descripcion+'</b>\
                                    <br>\
                                    ('+prod.nombre_tipo_producto+')\
                                </p>\
								<p>\
                                    <b class="precio">$'+prod.producto_precio+'</b>\
                                </p>\
								<input type="hidden" name="precio_'+prod.id_producto+'" id="precio_'+prod.id_producto+'" value="'+prod.producto_precio+'">\
								<select  name="talle_'+prod.id_producto+'" id="talle_'+prod.id_producto+'">\
		                        </select>\
                                <select class="add-cantidad" name="cantidada_'+prod.id_producto+'" id="cantidad_'+prod.id_producto+'">\
                                    <option value="0">Cantidad</option>\
                                    <option value="1">1</option>\
                                    <option value="2">2</option>\
                                    <option value="3">3</option>\
                                    <option value="4">4</option>\
                                    <option value="5">5</option>\
                                    <option value="6">6</option>\
                                    <option value="7">7</option>\
                                    <option value="8">8</option>\
                                    <option value="9">9</option>\
                                    <option value="10">10</option>\
                                </select>\
                                <!--<button id="add-to-car" type="submit" class="btn btn-primary" data-toggle="modal" data-target=".prod-agregado">Agregar</button>-->\
                                <button onclick="addCarrito('+prod.id_producto+');" type="button" class="btn btn-primary add-to-car" >Agregar</button>\
                            </li>';
                        $productos.append(html);
                        getTalle(prod.id_producto,'talle_'+prod.id_producto);
				})
			};
		});


	};

	var getTalle = function(idproducto,idSelect){
	
		var listado = $.ajax({
			url: uri.talles,
			method:'GET',
			dataType:'json',
			data:{
				action:"getTalles",
				idProducto:idproducto
			}

			
		});

		listado.done(function(res){

			console.log(res);

			if(!res.error){
				$("#"+idSelect).html("");
				$("#"+idSelect).html('<option value="0"> Talle </option>');
				res.data.forEach(function(talle){
					var html = '<option value="'+talle.id_talle+'">\
                        		'+talle.talle_nombre+'\
                               	</option>';
					$("#"+idSelect).append(html);
				});
			};
		});
	};



	$("#buscarMarca").on('change',"input",function(event){
		getProductos();
	})

	$("#buscarCategoria").on('change',"input",function(event){
		getProductos();
	})

	getMarcas();
	getcategorias();



})(jQuery)