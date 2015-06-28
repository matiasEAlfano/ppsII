<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}

function nueva($request){
    require("../models/prodCategoria.php");
    $c = new ProductoCategoria();
    $categoria = array();
    $categoria["categoria_nombre"] = $request->nombre_categoria;
    if($nueva = $c->createCategoria($categoria)){
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
    require("../models/prodCategoria.php");
    $c = new ProductoCategoria();
    $categoria = array();
    $categoria["id_categoria"] = $request->id_categoria;
    $categoria["categoria_nombre"] = $request->nombre_categoria;
    if($c->updateCategoria($categoria)){
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
    require("../models/prodCategoria.php");
    $c = new ProductoCategoria();
    if($c->removeCategoria($request->id)){
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
    require("../models/prodCategoria.php");
    $c = new ProductoCategoria();
    if($categorias = $c->getCategorias()){
        sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $categorias
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