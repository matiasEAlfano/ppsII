(function(){
 
    var validarFormData = function(){
        var valid = true;
        
        var descripcion-producto = $("#descripcion-producto").val();
        var marca = $("#marca-producto").val();
        var categoria = $("#categoria-producto").val();
        var tipoDeProducto = $("#tipoDeProducto-producto").val();
        var genero = $("#genero-producto").val();
        var talle = $("#talle-producto").val();

        
        if(descripcion-producto.length == 0){
            $("#descripcion-producto").closest(".form-group").addClass("has-error");
            $("#descripcion-producto").siblings(".glyphicon-remove").removeClass("hide");
            $("#descripcion-producto").siblings(".help-block").html("Completar este campo");
            valid = false;
        }

        if(marca.length == 0){
            $("#marca").closest(".form-group").addClass("has-error");
            $("#marca").siblings(".glyphicon-remove").removeClass("hide");
            $("#marca").siblings(".help-block").html("Completar este campo");
            valid = false;
        }

        if(categoria.length == 0){
            $("#categoria").closest(".form-group").addClass("has-error");
            $("#categoria").siblings(".glyphicon-remove").removeClass("hide");
            $("#categoria").siblings(".help-block").html("Completar este campo");
            valid = false;
        }

        if(tipoDeProducto.length == 0){
            $("#tipoDeProducto").closest(".form-group").addClass("has-error");
            $("#tipoDeProducto").siblings(".glyphicon-remove").removeClass("hide");
            $("#tipoDeProducto").siblings(".help-block").html("Completar este campo");
            valid = false;
        }

        if(genero.length == 0){
            $("#genero").closest(".form-group").addClass("has-error");
            $("#genero").siblings(".glyphicon-remove").removeClass("hide");
            $("#genero").siblings(".help-block").html("Completar este campo");
            valid = false;
        }

        if(talle.length == 0){
            $("#talle").closest(".form-group").addClass("has-error");
            $("#talle").siblings(".glyphicon-remove").removeClass("hide");
            $("#talle").siblings(".help-block").html("Completar este campo");
            valid = false;
        }


        return valid;
    };

    var cleanFormError = function(){
       
         //Quitar errores en campo descripcion-producto
        $("#descripcion-producto").closest(".form-group").removeClass("has-error");
        $("#descripcion-producto").siblings(".glyphicon-remove").addClass("hide");
        $("#descripcion-producto").siblings(".help-block").html("");

        //Quitar errores en campo marca
        $("#marca-producto").closest(".form-group").removeClass("has-error");
        $("#marca-producto").siblings(".glyphicon-remove").addClass("hide");
        $("#marca-producto").siblings(".help-block").html(""); 

                //Quitar errores en campo categoria
        $("#categoria-producto").closest(".form-group").removeClass("has-error");
        $("#categoria-producto").siblings(".glyphicon-remove").addClass("hide");
        $("#categoria-producto").siblings(".help-block").html(""); 

                //Quitar errores en campo tipoDeProducto
        $("#tipo-producto").closest(".form-group").removeClass("has-error");
        $("#tipo-producto").siblings(".glyphicon-remove").addClass("hide");
        $("#tipo-producto").siblings(".help-block").html(""); 

                //Quitar errores en campo genero
        $("#genero-producto").closest(".form-group").removeClass("has-error");
        $("#genero-producto").siblings(".glyphicon-remove").addClass("hide");
        $("#genero-producto").siblings(".help-block").html(""); 

                //Quitar errores en campo talle
        $("#talle-producto").closest(".form-group").removeClass("has-error");
        $("#talle-producto").siblings(".glyphicon-remove").addClass("hide");
        $("#talle-producto").siblings(".help-block").html(""); 

        
    };
    
    var modalConfirm = function(callback){
        
      $("#confirm-modal").modal('show');

      $("#modal-btn-si").on("click", function(){
        callback(true);
        $("#confirm-modal").modal('hide');
      });

      $("#modal-btn-no").on("click", function(){
        callback(false);
        $("#confirm-modal").modal('hide');
      });
    };

    /*Ver que formulario poner aca */
    $("#form-categoria").on("submit", function(){
        cleanFormError();
        return validarFormData();
    });
    
    $(".btn.eliminar").on("click", function(event){
        if(event.confirmado){
            return true;
        }
        modalConfirm(function(confirm){
          if(confirm){
              $(event.target).trigger({
                type : "click",
                confirmado : true
              });
          }
        });
        return false;
    });
 
})();