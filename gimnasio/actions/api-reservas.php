<?php
session_start();
require("../utils/request.php");

function redirect($url){
   header('Location: ' . $url, true, 303);
   die();
}

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
    case "filtroPorActividad":
        filtroPorActividad($request);
        break;
    case "filtroPorProfesor":
        filtroPorProfesor($request);
        break;
    case "reserva":
        reserva($request);
        break;
    case "confirmar":
        confirmarReserva($request);
        break;
    default:
        sendResponse(array(
            "error" => true,
            "mensaje" => "Request mal formado"
        ));
        break;
}


function reserva($request){
    require("../models/reservas.php");
        $r = new Reservas();
        $id = $request->id_calendario_profesor_actividad;

        if($datos = $r->reserva($id)){
            sendResponse(array(
                "error" => false,
                "mensaje" => "",
                "data" => $datos
            ));
        }else{
            sendResponse(array(
                "error" => true,
                "mensaje" => "Error al obtener datos de reserva"
            ));
        }
}


function confirmarReserva($request){
    require("../models/reservas.php");
    $r = new Reservas();
    $id = $request->idCalendario;
    
    
    if(isset($_SESSION["usuario"])){
        
        $usuario = $_SESSION["usuario"];

        $result = $r->reservaExiste($id, $usuario);

        if($result == "reservaExitosa"){
            sendResponse(array(
                "error" => false,
                "mensaje" => "Reserva exitosa!!",
            ));
        }else{
            sendResponse(array(
                "error" => true,
                "mensaje" => "Error al intentar guardar la reserva",
            ));
        }
    }else{
        sendResponse(array(
                "error" => true,
                "mensaje" => "No se ha logueado ningun socio!",
            ));
    }
}


function filtroPorProfesor($request){
    require("../models/reservas.php");
    $r = new Reservas();
    $id = $request->id;
    
    if($datos = $r->filtroPorProfesor($id)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $datos
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al filtrar por profesor"
        ));
    }
}


function filtroPorActividad($request){
    require("../models/reservas.php");
    $r = new Reservas();
    $id = $request->id;
    
    if($datos = $r->filtroPorActividad($id)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $datos
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al filtrar por actividad"
        ));
    }
}


function listarBusqueda($request){
    require("../models/reservas.php");
    $r = new Reservas();
    $idUsuario = $_SESSION["usuario"]["id"];
    
    if($datos = $r->listarBusqueda($request, $idUsuario)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $datos
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al listar el calendario de actividades"
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
            "mensaje" => "Error al cargar dias"
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
            "mensaje" => "Error al cargar profesores"
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
            "mensaje" => "Error al cargar actividades"
        ));
    }
}
    
