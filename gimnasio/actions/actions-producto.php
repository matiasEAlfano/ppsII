<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        require("../models/producto.php");
        $producto = array();
        $producto["producto_descripcion"] = $request["descripcion"];
        $producto["producto_genero"] = $request["genero"];
        $producto["producto_marca"] = $request["marca"];
        $producto["producto_categoria"] = $request["categoria"];
        $producto["producto_tipoProducto"] = $request["tipo"];
        $producto["producto_talle"] = $request["talle"];
        
        if(createProducto($producto)){
            redirect("../abmProductos.php");
        }else{
            redirect("../error.php");
        }
    }

    function actualizar($request){
        require("../models/producto.php");
        $producto = array();
        $producto["id_producto"] = $request["id"];
        $producto["producto_descripcion"] = $request["descripcion"];
        $producto["producto_genero"] = $request["genero"];
        $producto["producto_marca"] = $request["marca"];
        $producto["producto_categoria"] = $request["categoria"];
        $producto["producto_tipoProducto"] = $request["tipo"];
        $producto["producto_talle"] = $request["talle"];
        
        if(updateProducto($producto)){
            redirect("../abmProductos.php");
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        require("../models/producto.php");
        if(removeProducto($request["id"])){
            redirect("../abmProductos.php");
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../abmProductos.php?id=" . $request['id']);
    }

    function listar($request){
        redirect("../abmProductos.php");
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