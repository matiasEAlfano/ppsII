<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/marcas.php");
        $marca = array();
        $marca["marca_nombre"] = $request["nombre_marca"];
        
        if(createMarca($marca)){
            redirect("../abmMarcas.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/marcas.php");
        $marca = array();
        $marca["id_marca"] = $request["id_marca"];
        $marca["marca_nombre"] = $request["nombre_marca"];
       
        if(updateMarca($marca)){
            redirect("../abmMarcas.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/marcas.php");
        if(removeMarca($request["id"])){
            redirect("../abmMarcas.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../abmMarcas.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmMarcas.php");
    }

    $action = $request["action"];
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
        case "eliminar":
            eliminar($request);
            break;
        default:
            listar($request);
            break;
    }
?>