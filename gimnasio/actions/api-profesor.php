<?php

require("../utils/request.php");

function sendResponse($response){
    echo json_encode($response);
}
function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

function nueva($request){
    require("../models/profesores.php");
    $c = new Profesor();
    $profesor = array();
    $profesor["id"] = $request->id;
    $profesor["nombre"] = $request->profesor_nombre_apellido;
    $profesor["direccion"] = $request->profesor_direccion;
    $profesor["telefono"] = $request->profesor_telefono;
    $profesor["mail"] = $request->profesor_mail;
    $profesor["dni"] = $request->profesor_dni;
    if($nueva = $c->create($profesor)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Categoria creada",
            "data" => $nueva
        ));
        redirect("../abmProfesores.php?");
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al crear categoría"
        ));
    }
}

function actualizar($request){
    require("../models/profesores.php");
    $p = new Profesor();

    $profesor = array();
    $profesor["id"] = $request->id;
    $profesor["nombre"] = $request->profesor_nombre_apellido;
    $profesor["direccion"] = $request->profesor_direccion;
    $profesor["telefono"] = $request->profesor_telefono;
    $profesor["mail"] = $request->profesor_mail;
    $profesor["dni"] = $request->profesor_dni;
    if($p->update($profesor)){
        sendResponse(array(
            "error" => false,
            "mensaje" => "Profesor actualizado"
        ));
        redirect("../abmProfesores.php?");
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error ..."
        ));
    }
}

function eliminar($request){
    require("../models/profesores.php");
    $c = new Profesor();
    if($c->remove($request->id)){   
        sendResponse(array(
            "error" => false,
            "mensaje" => "Categoria eliminada"
        ));
        redirect("../abmProfesores.php?");
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error ..."
        ));
    }
}

function editar($request){
        var_dump($request);
        redirect("../abmProfesores.php?id=" . $request->id);
    }

function listar($request){
    require("../models/profesores.php");

    if($profesores = getAll()){
        sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $profesores
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al obtener profesores"
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
    case "editar":
        editar($request);
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