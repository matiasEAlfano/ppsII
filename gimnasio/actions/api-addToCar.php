<?php
session_start();
require("../utils/request.php");
/*
function sendResponse($response){
    echo json_encode($response);
}

function addToCar($producto){
    require("../models/addToCar.php");
    $c = new AddToCar();
    return sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $c->getDetalleProductos($producto)
        ));
}

$request = new Request();
*/
$action = $_GET["action"];
$producto = array();

$producto["idProducto"] = $_GET["idProducto"];
$producto["idTalle"] = $_GET["idTalle"];
$producto["cantidad"] = $_GET["cantidad"];

switch($action){
    case "add":
        return addCarrito($producto);
        break;
    case "remove":
        return removeCarrito($producto);
    default:
        sendResponse(array(
            "error" => true,
            "mensaje" => "Request mal formado"
        ));
        break;
}

function addCarrito($producto){    
    $producto_id = $producto["idProducto"];
    $_SESSION["carrito"][][$producto_id] = $producto;    
}
function removeCarrito($producto){ 
    $producto_id = $producto["idProducto"];
    for($i=0; $i<count($_SESSION["carrito"]); $i++){
        if(isset($_SESSION["carrito"][$i][$producto_id])){
            unset($_SESSION["carrito"][$i][$producto_id]);    
        }
    } 
}
    

    