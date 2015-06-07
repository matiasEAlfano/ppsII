<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/productoTipo.php");
         
        $tipo = array();
        $tipo["nombre_tipo_producto"] = $request["nombre_tipo"];
        
        if(createTipo($tipo)){
            redirect("../abmTipoProducto.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/productoTipo.php");
        $tipo = array();
        $tipo["id_tipo_producto"] = $request["id_tipo"];
        $tipo["nombre_tipo_producto"] = $request["nombre_tipo"];
       
        if(updateTipo($tipo)){
            redirect("../abmTipoProducto.php");
        }else{
            redirect("../error.php");
        }
    }




    function eliminar($request){
        require("../models/productoTipo.php");
        if(removeTipo($request["id"])){
            redirect("../abmTipoProducto.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../abmTipoProducto.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmTipoProducto.php");
    }

    $action = $request["action"];
    switch($action){
        case "guardar":
            nueva($request);
            break;
        case "actualizar":
            actualizar($request);
            break;
        case "editar":
            editar($request);
            break;        
        case "eliminar":
            eliminar($request);
            break;
        default:
            listar($request);
            break;
    }
?>