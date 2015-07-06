<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}

$request = new Request();
$action = $request->action;

switch($action){
    case "getActividades":
        getActividades();
        break;
    case "getProfesores":
        getProfesores();
        break;
    case "getDias":
        getDias();
        break;
    case "listar":
        listarBusqueda($request);
        break;
    default:
        sendResponse(array(
            "error" => true,
            "mensaje" => "Request mal formado"
        ));
        break;
}


function listarBusqueda($request){
    require("../models/reservas.php");
    $r = new Reservas();
    
    if($datos = $r->listarBusqueda($request)){
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


function getDias(){
    require("../models/reservas.php");
    $r = new Reservas();
    
    if($datos = $r->getDias()){
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


function getProfesores(){
    require("../models/reservas.php");
    $r = new Reservas();
    
    if($datos = $r->getProfesores()){
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


function getActividades(){
    require("../models/reservas.php");
    $r = new Reservas();
    
    if($datos = $r->getActividades()){
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
    
