<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/productoGenero.php");
         
        $genero = array();
        $genero["genero_nombre"] = $request["nombre_genero"];
        
        if(createGenero($genero)){
            redirect("../abmGeneroProducto.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/productoGenero.php");
        $genero = array();
        $genero["id_genero"] = $request["id_genero"];
        $genero["genero_nombre"] = $request["nombre_genero"];
       
        if(updateGenero($genero)){
            redirect("../abmGeneroProducto.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/productoGenero.php");
        if(removeGenero($request["id"])){
            redirect("../abmGeneroProducto.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../abmGeneroProducto.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmGeneroProducto.php");
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