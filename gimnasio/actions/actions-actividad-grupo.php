<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/actividadGrupo.php");
        $grupo = array();
        $grupo["descripcion"] = $request["descripcion"];
        $grupo["idtipo"] = $request["idTipo"];
        if(createGrupo($grupo)){
            redirect("../abmActividadGrupo.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/actividadGrupo.php");
        $grupo = array();
        $grupo["id"] = $request["id"];
        $grupo["descripcion"] = $request["descripcion"];
        $grupo["idtipo"] = $request["idTipo"];
        if(updateGrupo($grupo)){
            redirect("../abmActividadGrupo.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/actividadGrupo.php");
        if(removeGrupo($request["id"])){
            redirect("../abmActividadGrupo.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../abmActividadGrupo.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmActividadGrupo.php");
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