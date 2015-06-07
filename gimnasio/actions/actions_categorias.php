<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/productoCategoria.php");
         
        $categoria = array();
        $categoria["categoria_nombre"] = $request["nombre_categoria"];
        
        if(createCategoria($categoria)){
            redirect("../abmCategorias.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/productoCategoria.php");
        $categoria = array();
        $categoria["id_categoria"] = $request["id_categoria"];
        $categoria["categoria_nombre"] = $request["nombre_categoria"];
       
        if(updateCategoria($categoria)){
            redirect("../abmCategorias.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/productoCategoria.php");
        if(removeCategoria($request["id"])){
            redirect("../abmCategorias.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../abmCategorias.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmCategorias.php");
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