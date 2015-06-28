<?php
    session_start();
    require("../utils/request.php");

    function redirect($url){
           header('Location: ' . $url, true, 303);
           die();
        }

    $action = $request["action"];
    switch($action){
        case "comprar":
            return realizarCompra();
            break;
        default:
            sendResponse(array(
                "error" => true,
                "mensaje" => "Request mal formado"
            ));
            break;
    }

    function realizarCompra(){    
        
        require("../models/realizarCompra.php");
        $rc = new RealizarCompra();
        
        $compras = $_SESSION["carrito"];
        $usuario = $_SESSION["usuario"];
        $tarjeta = $_SESSION["tarjeta"];

        $exito = $rc->stockControl($compras, $usuario);

        if($exito == "compraExitosa"){
            unset($_SESSION["carrito"]);
            redirect("../socio.php?c=ok");
        }else{
            $idProducto = $exito["idProducto"];
            $idTalle = $exito["idTalle"];
            redirect("../micarrito.php?c=fail&producto=$idProducto&talle=$idTalle");
        }
        
    }


    function removeCarrito($producto){ 
        $producto_id = $producto["idProducto"];
        for($i=0; $i<count($_SESSION["carrito"]); $i++){
            if(isset($_SESSION["carrito"][$i][$producto_id])){
                unset($_SESSION["carrito"][$i][$producto_id]);    
            }
        } 
    }