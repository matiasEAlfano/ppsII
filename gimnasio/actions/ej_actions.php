<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/categoria.php");
        $categoria = array();
        $categoria["nombre"] = $request["nombre"];
        $categoria["descripcion"] = $request["descripcion"];
        if(createCategoria($categoria)){
            redirect("../listadoCategoria.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/categoria.php");
        $categoria = array();
        $categoria["id"] = $request["id"];
        $categoria["nombre"] = $request["nombre"];
        $categoria["descripcion"] = $request["descripcion"];
        if(updateCategoria($categoria)){
            redirect("../listadoCategoria.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/categoria.php");
        if(removeCategoria($request["id"])){
            redirect("../listadoCategoria.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../formCategoria.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../listadoCategoria.php");
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