<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}
$request = new Request();
$action = $request->action;

	function Marcas($request){
	    require("../models/marcas.php");
	    
	    if($datos = getMarcas()){
	        sendResponse(array(
	            "error" => false,
	            "mensaje" => "",
	            "data" => $datos
	        ));
	    }else{
	        sendResponse(array(
	            "error" => true,
	            "mensaje" => "Error al obtener las masrcas"
	        ));
	    }
	}

	function categorias($request){
	    require("../models/prodCategoria.php");

	    $c= new ProductoCategoria();
	    if($datos = $c->getCategorias()){
	        sendResponse(array(
	            "error" => false,
	            "mensaje" => "",
	            "data" => $datos
	        ));
	    }else{
	        sendResponse(array(
	            "error" => true,
	            "mensaje" => "Error al obtener las masrcas"
	        ));
	    }
	}


	function productos($request){
	    require("../models/producto.php");

	    $marca=$request->Marca;
	    $categoria = $request->cat;

	    if($datos = getFiltroProductos($marca,$categoria)){
	        sendResponse(array(
	            "error" => false,
	            "mensaje" => "",
	            "data" => $datos
	        ));
	    }else{
	        sendResponse(array(
	            "error" => true,
	            "mensaje" => "Error al obtener las masrcas"
	        ));
	    }
	}

	function tallesProducto($request){
	    require("../models/producto.php");

	    $producto = $request->idProducto;

	    if($datos = getTallesPorProducto($producto)){
	        sendResponse(array(
	            "error" => false,
	            "mensaje" => "",
	            "data" => $datos
	        ));
	    }else{
	        sendResponse(array(
	            "error" => true,
	            "mensaje" => "Error al obtener las masrcas"
	        ));
	    }
	}






	switch($action){
	    case "getMarcas":
	        Marcas($request);
	        break;
	    
	    case "getCategorias":
	        categorias($request);
	        break;
	    case "getProductos":
	        productos($request);
	        break;
        case "getTalles":
	        tallesProducto($request);
	        break;
	    default:
	        sendResponse(array(
	            "error" => true,
	            "mensaje" => "Request mal formado"
	        ));
	        break;
	}