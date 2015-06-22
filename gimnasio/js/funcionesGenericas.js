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
    
     $.validator.addMethod("sinValorSeleccionado", function(value, element, arg){
  return arg != value;
 }, "Value must not equal arg.");
    
    $("#form-actiTipo").validate({
			rules: {
				descripcion: {
					required: true
				},   	   
            },
			messages: {
				descripcion: {
					required: "Por favor ingrese una descripcion del tipo de actividad."				}
            }
        });
    $("#form-actividad-tipo").validate({
			rules: {
				descripcion: {
					required: true
				},   	   
            },
			messages: {
				descripcion: {
					required: "Por favor ingrese una descripcion del tipo de actividad."				}
            }
        });
    
    $("#form-actividad-grupo").validate({
			rules: {
				descripcion: {
					required: true
				},   	   
            },
			messages: {
				descripcion: {
					required: "Por favor ingrese una descripcion del tipo de actividad."				}
            }
        });
    
    
    $("#form-marcas").validate({
			rules: {
				nombre_marca: {
					required: true
				},   	   
            },
			messages: {
				nombre_marca: {
					required: "Por favor ingrese una marca."				}
            }
        });
    
    $("#form-tipo-producto").validate({
			rules: {
				nombre_tipo: {
					required: true
				},   	   
            },
			messages: {
				nombre_tipo: {
					required: "Por favor ingrese una tipo de producto."				}
            }
        });

    $("#form-categoria-producto").validate({
			rules: {
				nombre_categoria: {
					required: true
				},   	   
            },
			messages: {
				nombre_categoria: {
					required: "Por favor ingrese una categoria de producto."				}
            }
        });
    
    $("#form-genero-producto").validate({
			rules: {
				nombre_genero: {
					required: true
				},   	   
            },
			messages: {
				nombre_genero: {
					required: "Por favor ingrese un genero de producto."				}
            }
        });
    
    $("#form-talle-producto").validate({
			rules: {
				nombre_talle: {
					required: true
				},   	   
            },
			messages: {
				nombre_talle: {
					required: "Por favor ingrese un talle de producto."				}
            }
        });   

    $("#form-actividades").validate({
			rules: {
				nombre: {
					required: true
				},   	   
            },
			messages: {
				nombre: {
					required: "Por favor ingrese un nombre de actividad."				}
            }
        });
   
    
    
    $("#form-productos-stock").validate({       
        
        /*ignore: "",*/
        rules: {
                cantidad:{
                    required: true,
                    digits: true
                },
                talle:{
                    sinValorSeleccionado:"Seleccione un talle"            
                }
            
            },
			messages: {
				   cantidad:{
                    required: "Por favor ingrese cantidad.",
                    digits: "Solo se permiten numeros enteros."
                },
                  talle:{
                    sinValorSeleccionado: "Por favor seleccione un talle."
                }
            }
        });
    
     $("#guardarStock").on("click", function (){
        
        if(!$("#eligioProducto").val()){
            alert("Debe seleccionar un producto.");
            return false;
        }
        
    });
    

    $("#form-productos").validate({
			rules: {
				descripcion: {
					required: true
				},
                precio: {
					required: true,
                    number: true
				},
                marca: {
					sinValorSeleccionado: "Seleccione una marca"
				},
                categoria: {
					sinValorSeleccionado: "Seleccione una categoria"
				},
                tipo: {
					sinValorSeleccionado: "Seleccione un tipo"
				},
                genero: {
					sinValorSeleccionado: "Seleccione un genero"
				}
            },
			messages: {
				descripcion: {
					required: "Por favor ingrese una descripcion."				
                },
                precio:{
                    required: "Por favor ingrese precio.",
                    number: "Solo se permiten numeros y un punto para separar decimales Ej: (12.99)"                
                },
                marca: {
					sinValorSeleccionado: "Por favor seleccione una marca."
				},
                categoria: {
					sinValorSeleccionado: "Por favor seleccione una categoria."
				},
                tipo: {
					sinValorSeleccionado: "Por favor seleccione un tipo."
				},
                genero: {
					sinValorSeleccionado: "Por favor seleccione un genero."
				}
             
            }
        });
    
    
    
    $("#form-login").validate({
			rules: {
				login_email: {
					required: true,
					email: true
				},    
				login_clave: {
					required: true,
					minlength: 5
				}   
            },
			messages: {
				login_email: {
					required: "Por favor ingrese su email.",
					email: "El email no es valido."
				},     
				login_clave: {
					required: "Por favor ingrese una clave.",
					minlength: "Su clave debe contener como minimo 5 caracteres."
				}
            }
        });
    
		$("#form-registrar").validate({
			rules: {
				email: {
					required: true,
					email: true
				},
				email_repetir: {
					required: true,
					email: true,
                    equalTo: "#email"
				},   
				clave: {
					required: true,
					minlength: 5
				},                
				clave_repetir: {
					required: true,
					minlength: 5,
					equalTo: "#clave"
				}
			},
			messages: {
				email: {
					required: "Por favor ingrese su email.",
					email: "El email no es valido."
				},
				email_repetir: {
					required: "Por favor ingrese su email.",
					email: "El email no es validor.",
                    equalTo: "Las emails ingresados no son iguales."
				},                
				clave: {
					required: "Por favor ingrese una clave.",
					minlength: "Su clave debe contener como minimo 5 caracteres."
				},
				clave_repetir: {
					required: "Por favor ingrese una clave.",
					minlength: "Su clave debe contener como minimo 5 caracteres.",
					equalTo: "Las claves ingresadas no son iguales."
				}
			}
		});    
    
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

 
    

