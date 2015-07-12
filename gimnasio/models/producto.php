<?php

function getConnection(){
        $mysqli = new mysqli("localhost", "root", "admin", "atleticus");
        if( $mysqli->connect_errno ){
            die("Error al intentar establecer la conexión con MySQL");
        }else{
            $mysqli->query("SET NAMES 'utf8'");
            return $mysqli;
        }
    }

    function getTalle($talleId){
        $talle = array();
        $c = getConnection();
        $id = (int) $c->real_escape_string($talleId);
        $query = "SELECT id_talle, talle_nombre FROM `talles` WHERE id_talle = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }
    
    function getCategorias(){
        $categorias = array();
        $c = getConnection();
        $query = "SELECT id_categoria, categoria_nombre  
                 FROM `categorias`
                 order by categoria_nombre";
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $categorias[] = $fila;
            }
            $result->free();
        }
        return $categorias;
    }

    function getTallesPorProducto($idProducto){
        $talles = array();
        $c = getConnection();
        $id = (int)$c->real_escape_string($idProducto);
        $query = "SELECT id_talle, talle_nombre 
                    FROM `productos` as p,
                            `talles` as t,
                            `stocks` as s
                    WHERE p.id_producto = s.producto 
                        AND t.id_talle = s.talle
                        AND s.producto = $id
                        order by talle_nombre";

        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $talles[] = $fila;
            }
            $result->free();
        }
        return $talles;
    }

    function getGeneros(){
        $generos = array();
        $c = getConnection();
        $query = "SELECT id_genero, genero_nombre  
                 FROM `generos`
                 order by genero_nombre";
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $generos[] = $fila;
            }
            $result->free();
        }
        return $generos;
    }

    function getTipos(){
        $tipos = array();
        $c = getConnection();
        $query = "SELECT p.id_tipo_producto, p.nombre_tipo_producto, c.categoria_nombre 
                    FROM `producto-tipo` as p , `categorias` as c 
                    WHERE p.id_categoria = c.id_categoria
                    order by p.nombre_tipo_producto";

        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $tipos[] = $fila;
            }
            $result->free();
        }
        return $tipos;
    }

    function getMarcas(){
        $marcas = array();
        $c = getConnection();
        $query = "SELECT id_marca, marca_nombre  
                 FROM `marcas`
                 order by marca_nombre";
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $marcas[] = $fila;
            }
            $result->free();
        }
        return $marcas;
    }

    
/*
Gabby quito columnas
*/
    function getProducto($productoId){      
        $c = getConnection();
        $id = (int) $c->real_escape_string($productoId);
        $query = "SELECT p.id_producto, 
                         p.producto_descripcion, 
                         m.id_marca,
                         m.marca_nombre,    
                         p.producto_precio,
                         p.producto_imagen,
                         c.id_categoria, 
                         pt.id_tipo_producto,                                                  
                         g.genero_nombre,
                         g.id_genero
                         FROM productos as p , marcas as m , categorias as c , `producto-tipo` as pt , generos as g
                         WHERE p.id_producto = $id AND 
                               p.producto_marca = m.id_marca AND 
                               p.producto_categoria = c.id_categoria AND 
                               p.producto_tipoProducto = pt.id_tipo_producto AND 
                               p.producto_genero = g.id_genero";
        
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getFiltroProductos($marca,$cat){
        $c = getConnection();
        $query = "SELECT p.id_producto, 
                p.producto_descripcion, 
                m.marca_nombre, 
                p.producto_precio, 
                c.categoria_nombre, 
                pt.nombre_tipo_producto, 
                g.genero_nombre, 
                p.producto_imagen
            FROM productos as p , 
                marcas as m , 
                categorias as c , 
                `producto-tipo` as pt , 
                generos as g
            WHERE p.producto_genero = g.id_genero
            AND p.producto_tipoProducto = pt.id_tipo_producto
            AND p.producto_marca = m.id_marca
            AND p.producto_categoria = c.id_categoria";
            if ($cat !="-1") {
                $query = $query." AND p.producto_categoria = $cat";
            };
            if ($marca !="-1") {
                $query = $query." AND p.producto_marca = $marca ";
            };
        $query = $query." order by producto_descripcion";

        $productos = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                
                $productos[] = $fila;
            }
            $result->free();
        }
        else{
            return false;
        }
        return $productos;
    }

    function getProductos(){
        $c = getConnection();
        $query = "SELECT p.id_producto, 
                p.producto_descripcion, 
                m.marca_nombre, 
                p.producto_precio, 
                c.categoria_nombre, 
                pt.nombre_tipo_producto, 
                g.genero_nombre, 
                p.producto_imagen
            FROM productos as p , 
                marcas as m , 
                categorias as c , 
                `producto-tipo` as pt , 
                generos as g
            WHERE p.producto_marca = m.id_marca 
            AND p.producto_categoria = c.id_categoria 
            AND p.producto_tipoProducto = pt.id_tipo_producto 
            AND p.producto_genero = g.id_genero
        order by producto_descripcion";
        $productos = array();

        $result = $c->query($query);

        if (!$result) {
            return false;
        }


        
        while($fila = $result->fetch_assoc()){
            
            $productos[] = $fila;
        }
        $result->free();
        
        return $productos;
    }
    
    function createProducto($producto){
        $c = getConnection();
        $descripcion = $c->real_escape_string($producto['producto_descripcion']);
        $marca = (int) $c->real_escape_string($producto['producto_marca']);
        $precio = $c->real_escape_string($producto['producto_precio']);
        $categoria = (int) $c->real_escape_string($producto['producto_categoria']);
        $tipoProducto = (int) $c->real_escape_string($producto['producto_tipoProducto']);
        $genero = (int) $c->real_escape_string($producto['producto_genero']);
        
        $query = "INSERT INTO `productos` VALUES (
                    DEFAULT,
                    '$descripcion',
                    '$marca',
                    '$precio',
                    '$categoria',
                    '$tipoProducto',
                    '$genero',
                    NULL)";
        if($c->query($query)){
            $producto['id_producto'] = $c->insert_id;
            return $producto;
        }else{
            echo $c->error;
        }
    }

    function updateProducto($producto){
        $c = getConnection();
        $id = $c->real_escape_string($producto['id_producto']);
        $descripcion = $c->real_escape_string($producto['producto_descripcion']);
        $marca = $c->real_escape_string($producto['producto_marca']);
        $precio = $c->real_escape_string($producto['producto_precio']);
        $categoria = $c->real_escape_string($producto['producto_categoria']);
        $tipoProducto = $c->real_escape_string($producto['producto_tipoProducto']);
        $genero = $c->real_escape_string($producto['producto_genero']);
        
        $query = "UPDATE `productos` SET
                    producto_descripcion = '$descripcion',
                    producto_marca = '$marca',
                    producto_precio = '$precio',
                    producto_categoria = '$categoria',
                    producto_tipoProducto = '$tipoProducto',
                    producto_genero = '$genero'
                  WHERE id_producto = $id";
        return $c->query($query);
    }

    function removeProducto($productoId){
        $c = getConnection();
        $id = $c->real_escape_string($productoId);
        $query = "DELETE FROM `productos`
                  WHERE id_producto = $productoId";
        return $c->query($query);
    }

/*$productos = getProductos();

var_dump ($productos);*/


?>