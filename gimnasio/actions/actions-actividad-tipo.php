<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/actividadTipo.php");
        $tipo = array();
        $tipo["descripcion"] = $request["descripcion"];
        if(createTipo($tipo)){
            redirect("../abmActividadTipo.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/actividadTipo.php");
        $tipo = array();
        $tipo["id"] = $request["id"];
        $tipo["descripcion"] = $request["descripcion"];
        if(updateTipo($tipo)){
            redirect("../abmActividadTipo.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/actividadTipo.php");
        if(removeTipo($request["id"])){
            redirect("../abmActividadTipo.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../abmActividadTipo.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmActividadTipo.php");
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