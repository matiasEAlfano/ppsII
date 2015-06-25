<?php
session_start();
require("../utils/request.php");

function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

$action = $request["action"];
switch($action){
    case "add":
        return addTarjeta($request);
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

function addTarjeta($request){    
<<<<<<< HEAD
    $_SESSION["tarjeta"]["idtipo-tarjeta"] = $request["tipo_tarjeta"];
    $_SESSION["tarjeta"]["numero-tarjeta"] = $request["numero_tarjeta"];
    $_SESSION["tarjeta"]["mes-expiracion"] = $request["mes-expiracion"];
    $_SESSION["tarjeta"]["ano-expiracion"] = $request["ano-expiracion"];
    $_SESSION["tarjeta"]["tarjeta-ccv"] = $request["tarjeta_ccv"];
=======
    $_SESSION["tarjeta"]["idtipo-tarjeta"] = $request["tipo-tarjeta"];
    $_SESSION["tarjeta"]["numero-tarjeta"] = $request["numero-tarjeta"];
    $_SESSION["tarjeta"]["mes-expiracion"] = $request["mes-expiracion"];
    $_SESSION["tarjeta"]["ano-expiracion"] = $request["ano-expiracion"];
    $_SESSION["tarjeta"]["tarjeta-ccv"] = $request["ano-expiracion"];
>>>>>>> a87da8f3a0e8f7864b4bb752e214381d9f19e1ec
    
    redirect("../comprar3.php");
}
function removeCarrito($producto){ 
    $producto_id = $producto["idProducto"];
    for($i=0; $i<count($_SESSION["carrito"]); $i++){
        if(isset($_SESSION["carrito"][$i][$producto_id])){
            unset($_SESSION["carrito"][$i][$producto_id]);    
        }
    } 
}