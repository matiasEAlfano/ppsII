<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}
$request = new Request();
$action = $request->action;

	function getGrupos($request){
	    require("../models/actividad-listar.php");
	    $idTipo = $request->idTipo;
	    $mc = new Actividad();
	    
	    if($datos = $mc->getGrupos($idTipo)){
	        sendResponse(array(
	            "error" => false,
	            "mensaje" => "",
	            "data" => $datos
	        ));
	    }else{
	        sendResponse(array(
	            "error" => true,
	            "mensaje" => "Error al obtener los grupos"
	        ));
	    }
	}

	function getTipos($request){
	    require("../models/actividad-listar.php");
	    
	    $mc = new Actividad();
	    
	    if($datos = $mc->getTipos()){
	        sendResponse(array(
	            "error" => false,
	            "mensaje" => "",
	            "data" => $datos
	        ));
	    }else{
	        sendResponse(array(
	            "error" => true,	
	            "mensaje" => "Error al obtener los grupos"
	        ));
	    }
	}

	function getActividades($request){
		require("../models/actividad-listar.php");
		$idGrupo = $request->idGrupo;

		$a = new Actividad();

		if($datos = $a->getActividades($idGrupo)){
			sendResponse(array(
	            "error" => false,
	            "mensaje" => "",
	            "data" => $datos
	        ));
		}else{
	        sendResponse(array(
	            "error" => true,
	            "mensaje" => "Error al obtener los las actividades"
	        ));
	    }
	}






	switch($action){
	    case "getGrupos":
	        getGrupos($request);
	        break;
	    
	    case "getTipos":
	        getTipos($request);
	        break;
        case "getActividades":
        	getActividades($request);
        	break;	    
	    default:
	        sendResponse(array(
	            "error" => true,
	            "mensaje" => "Request mal formado"
	        ));
	        break;
	}