<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}

$request = new Request();
$action = $request->action;

switch($action){
    case "datosPersonales":
        listarDatos($request);
        break;
    
    case "compras":
        listarCompras($request);
        break;
    
    default:
        sendResponse(array(
            "error" => true,
            "mensaje" => "Request mal formado"
        ));
        break;
}

function listarCompras($request){
    require("../models/miCuenta.php");
    $idUsuario = $request->idUsuario;
    $mc = new MiCuenta();
    
    if($datos = $mc->listarComprasUsuario($idUsuario)){
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


function listarDatos($request){
    require("../models/miCuenta.php");
    $idUsuario = $request->idUsuario;
    $mc = new MiCuenta();
    if($datos = $mc->listarDatosUsuario($idUsuario)){
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

