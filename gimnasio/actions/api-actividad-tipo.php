<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}

function nueva($request){
    require("../models/categoria.php");
    $c = new Categoria();
    $categoria = array();
    $categoria["nombre"] = $request->nombre;
    $categoria["descripcion"] = $request->descripcion;
    if($nueva = $c->create($categoria)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Categoria creada",
            "data" => $nueva
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al crear categoría"
        ));
    }
}

function actualizar($request){
    require("../models/categoria.php");
    $c = new Categoria();
    $categoria = array();
    $categoria["id"] = $request->id;
    $categoria["nombre"] = $request->nombre;
    $categoria["descripcion"] = $request->descripcion;
    if($c->update($categoria)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Categoria actualizada"
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error ..."
        ));
    }
}

function eliminar($request){
    require("../models/categoria.php");
    $c = new Categoria();
    if($c->remove($request->id)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Categoria eliminada"
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error ..."
        ));
    }
}

function listar($request){
    require("../models/actiTipo.php");
    $c = new ActividadTipo();
    if($tipos = $c->getAll()){
        sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $tipos
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al obtener tipos"
        ));
    }
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
    default:
        sendResponse(array(
            "error" => true,
            "mensaje" => "Request mal formado"
        ));
        break;
}