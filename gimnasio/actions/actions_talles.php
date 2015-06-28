<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/productoTalle.php");
         
        $talle = array();
        $talle["talle_nombre"] = $request["nombre_talle"];
        
        if(createTalle($talle)){
            redirect("../abmTallesProducto.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/productoTalle.php");
        $talle = array();
        $talle["id_talle"] = $request["id_talle"];
        $talle["talle_nombre"] = $request["nombre_talle"];
       
        if(updateTalle($talle)){
            redirect("../abmTallesProducto.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/productoTalle.php");
        if(removeTalle($request["id"])){
            redirect("../abmTallesProducto.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../abmTallesProducto.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmTallesProducto.php");
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