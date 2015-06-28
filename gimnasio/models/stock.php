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

    function getTalles(){
        $talles = array();
        $c = getConnection();
        $query = "SELECT id_talle, talle_nombre FROM `talles`";
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
    

    function getProducto($productoId){      
        $c = getConnection();
        $id = (int) $c->real_escape_string($productoId);
        $query = "SELECT p.id_producto, 
                         p.producto_descripcion, 
                         m.marca_nombre,
                         p.producto_precio,
                         c.categoria_nombre, 
                         pt.nombre_tipo_producto, 
                         g.genero_nombre 
                         FROM productos as p , marcas as m , categorias as c , `producto-tipo` as pt , generos as g
                         WHERE p.id_producto = $id AND 
                               p.producto_marca = m.id_marca AND 
                               p.producto_categoria = c.id_categoria AND 
                               p.producto_tipoProducto = pt.id_tipo_producto AND 
                               p.producto_genero = g.id_genero";
        
        $result = $c->query($query);
        return $result->fetch_assoc();
    }
    
    function getProductos(){
        $c = getConnection();
        $query = "SELECT p.id_producto, p.producto_descripcion, m.marca_nombre, p.producto_precio, c.categoria_nombre, pt.nombre_tipo_producto, g.genero_nombre, p.producto_imagen
        FROM productos as p , marcas as m , categorias as c , `producto-tipo` as pt , generos as g
        WHERE p.producto_marca = m.id_marca AND p.producto_categoria = c.id_categoria AND p.producto_tipoProducto = pt.id_tipo_producto AND p.producto_genero = g.id_genero
        order by producto_descripcion";
        $productos = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                
                $productos[] = $fila;
            }
            $result->free();
        }
        return $productos;
    }

    function getTallesPorProducto($idProducto){
        $talles = array();
        $c = getConnection();
        $id = (int)$c->real_escape_string($idProducto);
        $query = "SELECT id_talle, talle_nombre, cantidad 
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
    
    function getProductosInStock(){
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
        	AND p.id_producto in
            (SELECT producto FROM `stocks`
            group by producto)
            order by p.producto_descripcion";
        
        $stocks = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                
                $stocks[] = $fila;
            }
            $result->free();
        }
        return $stocks;
    }

    function getStocks(){
        $c = getConnection();
        $query = "SELECT s.id_stock, 
                            s.producto, 
                            p.producto_descripcion, 
                            s.talle, 
                            t.talle_nombre,   
                            s.cantidad,
                            m.marca_nombre
                FROM `stocks` as s, 
                        `productos` as p, 
                        `talles` as t,
                        `marcas` as m
                where s.producto = p.id_producto
                AND s.talle = t.id_talle
                AND m.id_marca = p.producto_marca
                order by producto_descripcion";
        
        $stocks = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                
                $stocks[] = $fila;
            }
            $result->free();
        }
        return $stocks;
    }
    
    function getStock($stock){      
            $c = getConnection();
            $id_producto = (int) $c->real_escape_string($stock['producto']);
            $id_talle = (int) $c->real_escape_string($stock['talle']);
            $query = "SELECT cantidad FROM `stocks` 
                    WHERE producto = $id_producto
                    AND talle = $id_talle";
            $result = $c->query($query);
            return $result->fetch_assoc();
        }
    
    function createStock($stock){
        $c = getConnection();
        $producto = $c->real_escape_string($stock['producto']);
        $talle = (int) $c->real_escape_string($stock['talle']);
        $cantidad = (int) $c->real_escape_string($stock['cantidad']);
                    
        $noDuplicate = "SELECT id_stock, cantidad
                        FROM `stocks`
                        WHERE producto = $producto
                        AND talle = $talle";
        $result = $c->query($noDuplicate);
        
        if($result->num_rows == 0){
            $query = "INSERT INTO `stocks` VALUES (
                        DEFAULT,
                        '$producto',
                        '$talle',
                        '$cantidad')";

            if($c->query($query)){
                $stock['id_stock'] = $c->insert_id;
                return $stock;
            }else{
                echo $c->error;
            }
        }else{
           if(updateStock($stock)){
                redirect("../abmStocks.php");
            }else{
                redirect("../error.php");
            }
        }
    }

    function updateStock($stock){
        $c = getConnection();
        $producto = $c->real_escape_string($stock['producto']);
        $talle = $c->real_escape_string($stock['talle']);
        $cantidad = $c->real_escape_string($stock['cantidad']);
        
        $cantidadProducto = getStock($stock)["cantidad"];
        
        $cantidadProducto = $cantidadProducto + $cantidad;
        
        $query = "UPDATE `stocks` SET
                    cantidad = $cantidadProducto
                  WHERE producto = $producto
                  AND talle = $talle";
        
        return $c->query($query);
    }

    function removeStock($stockId){
        $c = getConnection();
        $id = $c->real_escape_string($stockId);
        $query = "DELETE FROM `stocks`
                  WHERE id_stock = $id";
        return $c->query($query);
    }

/*$productos = getProductos(21);

var_dump ($productos);*/
?>