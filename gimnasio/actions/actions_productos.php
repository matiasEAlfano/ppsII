<?php
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        /*require("../models/categoria.php");*/
        require("../models/producto.php");
        $producto = array();
        $producto["id_producto"] = $request["id_producto"];
        $producto["descripcion"] = $request["producto_descripcion"];
        $producto["genero"] = $request["producto_genero"];
        $producto["marca"] = $request["producto_marca"];
        $producto["categoria"] = $request["producto_categoria"];
        $producto["tipoProducto"] = $request["producto_tipoProducto"];
        $producto["talle"] = $request["producto_talle"];
        $producto["color"] = $request["producto_color"];
        
        if(createProducto($producto)){
            /*redirect("../listadoCategoria.php");*/
            redirect("/admin.php");
        }else{
            redirect("../error.php"); //ver esto
        }
    }

    function actualizar($request){
        /*require("../models/categoria.php");*/
        require("../models/producto.php");
        $producto = array();
        $producto["id_producto"] = $request["id_producto"];
        $producto["descripcion"] = $request["producto_descripcion"];
        $producto["genero"] = $request["producto_genero"];
        $producto["marca"] = $request["producto_marca"];
        $producto["categoria"] = $request["producto_categoria"];
        $producto["tipoProducto"] = $request["producto_tipoProducto"];
        $producto["talle"] = $request["producto_talle"];
        $producto["color"] = $request["producto_color"];
        
        if(updateCategoria($categoria)){
            redirect("../listadoCategoria.php"); //ver a donde redireccionarlo
        }else{
            redirect("../error.php");
        }
    }

    function eliminar($request){
        /*require("../models/categoria.php");*/
        require("../models/producto.php");
        if(removeProducto($request["id_producto"])){
            redirect("../listadoCategoria.php"); //ver a donde redireccionarlo
        }else{
            redirect("../error.php");
        }
    }

    function editar($request){
        var_dump($request);
        redirect("../formCategoria.php?id=" . $request['id_producto']);//ver a donde redireccionarlo
    }

    function listar($request){
        redirect("../productos.php");//ver a donde redireccionar
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