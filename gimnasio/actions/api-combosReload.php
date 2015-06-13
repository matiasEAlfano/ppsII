<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}

function reloadTipoProducto($idCategoria){
    require("../models/combosReload.php");
    $c = new CombosReload();
    return sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $c->getTipo($idCategoria)
        ));    
}

$request = new Request();
$action = $_GET["action"];
$idCategoria = $_GET["categoria"];
switch($action){
    case "reloadTipoProducto":
        return reloadTipoProducto($idCategoria);
        break;
    
    default:
        sendResponse(array(
            "error" => true,
            "mensaje" => "Request mal formado"
        ));
        break;
}