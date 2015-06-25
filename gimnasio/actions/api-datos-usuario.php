<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}

function nueva($request){
    require("../models/datos-usuario.php");
    $c = new DatosUsuario();
    $datos = array();
    $datos["idUsuario"] = $request->idUsuario;
    $datos["nombre"] = $request->nombre;
    $datos["apellido"] = $request->apellido;
    $datos["dni"] = $request->dni;
    $datos["direccion"] = $request->direccion;
    $datos["cp"] = $request->cp;
    $datos["localidad"] = $request->localidad;
    $datos["telefono"] = $request->telefono;
    
    if($nueva = $c->create($datos)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Comentario creado",
            "data" => $nueva
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al crear comentario"
        ));
    }
}

function listar($request){
    require("../models/datos-usuario.php");
    $c = new DatosUsuario();
    $idUsuario = $request->id;
    if($datos = $c->getAll($idUsuario)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $datos
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al obtener datos de personales"
        ));
    }
}

$request = new Request();
$action = $request->action;
switch($action){
    case "guardar":
        nueva($request);
        break;
    case "listar":
        listar($request);
        break;
    default:
        sendResponse(array(
            "error" => true,
            "mensaje" => "Request mal formado"
        ));
        break;
    
}