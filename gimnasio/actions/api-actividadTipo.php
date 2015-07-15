<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}


$request = new Request();
$action = $request->action;
switch($action){
    case "guardar":
        nueva($request);
        break;
    case "actualizar":
        actualizar($request);
        break;
    case "listar":
        listar($request);
        break;        
    case "eliminar":
        eliminar($request);
        break;
    case "traerDato":
        traerDato($request);
        break;
    default:
        sendResponse(array(
            "error" => true,
            "mensaje" => "Request mal formado"
        ));
        break;
}


function traerDato($request){
    require("../models/actividadTipo.php");
    $a = new ActividadTipo();
    
    if($datos = $a->getTipo($request)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Tipo encontrado",
            "data" => $datos
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al traer Tipo"
        ));
    }
}

function nueva($request){
    require("../models/actividadTipo.php");
    $a = new ActividadTipo();
    
    if($datos = $a->createTipo($request)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Tipo creado",
            "data" => $datos
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al crear Tipo"
        ));
    }
}

function actualizar($request){
    require("../models/actividadTipo.php");
    $a = new ActividadTipo();
    
    if($dato = $a->actualizar($request)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Tipo actualizado",
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al actualizar Tipo"
        ));
    }
}

function eliminar($request){
    require("../models/actividadTipo.php");
    $a = new ActividadTipo();
    
    if($a->eliminar($request)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Tipo eliminado"
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al eliminar Tipo"
        ));
    }
}

function listar($request){
    require("../models/actividadTipo.php");
    $a = new ActividadTipo();
    
    if($datos = $a->getAll()){
        sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $datos
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al obtener tipos"
        ));
    }
}

