<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/actividades.php");
        $actividad = array();
        $actividad["nombre"] = $request["nombre"];
        $actividad["idtipo"] = $request["idTipo"];
        $actividad["idgrupo"] = $request["idGrupo"];
        if(createActividad($actividad)){
            redirect("../abmActividades.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/actividades.php");
        $actividad = array();
        $actividad["id"] = $request["id"];
        $actividad["nombre"] = $request["nombre"];
        $actividad["idtipo"] = $request["idTipo"];
        $actividad["idgrupo"] = $request["idGrupo"];
        if(updateActividad($actividad)){
            redirect("../abmActividades.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/actividades.php");
        if(removeActividad($request["id"])){
            redirect("../abmActividades.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../abmActividades.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmActividades.php");
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