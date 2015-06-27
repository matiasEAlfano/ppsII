<?php

function sendResponse($response){
    echo json_encode($response);
    die();
}

function guardarArchivo($file, $imgId){
    $uploaddir = "../img/";
    $imgDir = $uploaddir . $imgId;
    if(mkdir($imgDir, 0777, true)){

        echo("hola");        
        return move_uploaded_file($file['tmp_name'], $imgDir . "/" . $file['name']);
    }
    return false;
}

function subir(){
    
    /*echo "<pre>";
    var_dump ($_FILES);
    echo "</pre>";*/
    
    require("../models/imagen.php");
    
    if(!empty($_FILES)){ 
        
        $imgFile = $_FILES[0];
        $imgData = new Imagen();

        console.log($imgFile);

        $result = $imgData->create(array(
            "path" => "img/",
            "file_name" => $imgFile['name']
        ));
        
        if($result){
            if(guardarArchivo($imgFile, $result['id'])){
                sendResponse(array(
                    "error" => false,
                    "mensaje" => "Imagen guardada"
                ));
            }else{
                //TODO: eliminar de la base la imagen creada para consistencia con fileSistem (hacer un metodo para eliminar lo que agregue a la base de datos)
                sendResponse(array(
                    "error" => false,
                    "mensaje" => "Error al guardar imagen en disco"
                ));
            }
        }else{
            sendResponse(array(
                "error" => false,
                "mensaje" => "Error al guardar imagen en db"
            ));
        }
        
    }
    
    sendResponse(array(
        "error" => true,
        "mensaje" => "No se ha enviado ninguna imagen",
        "get" => json_encode($_GET),
        "post" => json_encode($_POST),
        "files" => json_encode($_FILES),
    ));

}


function listar(){
    require("../models/imagen.php");
    $img = new Imagen();
    if($imagenes = $img->getAll()){
        sendResponse(array(
            "error" => false,
            "mensaje" => "",
            "data" => $imagenes
        ));
    }else{
        sendResponse(array(
            "error" => true,
            "mensaje" => "Error al obtener imágenes"
        ));
    }
}

$action = $_REQUEST["action"];
switch($action){
    case "subir":
        subir();
        break;        
    case "listar":
        listar();
        break;
    default:
        sendResponse(array(
            "error" => true,
            "mensaje" => "Request mal formado"
        ));
        break;
}
