<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/stock.php");
        $stock = array();
        $stock["producto"] = $request["id"];
        $stock["talle"] = $request["talle"];
        $stock["cantidad"] = $request["cantidad"];
        if(createStock($stock)) {
            redirect("../abmStocks.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/stock.php");
        $stock = array();
        $stock["producto"] = $request["descripcion"];
        $stock["talle"] = $request["talle"];
        $stock["cantidad"] = $request["cantidad"];
        
        if(updateStock($stock)){
            redirect("../abmStocks.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/stock.php");
        if(removeStock($request["id"])){
            redirect("../abmStocks.php");
        }else{
            redirect("../error.php");
        }
    }

    function seleccionar($request){
        var_dump($request);
        redirect("../abmStocks.php?id=" . $request['id']);
    }

    function editar($request){
        var_dump($request);
        redirect("../abmStocks.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmStocks.php");
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
        case "seleccionar":
            seleccionar($request);
            break;
        default:
            listar($request);
            break;
    }
?>