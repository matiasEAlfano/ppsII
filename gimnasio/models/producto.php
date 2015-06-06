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

    function getproducto($productoId){      
        $productos = array();
        $c = getConnection();
        $id = (int) $c->real_escape_string($productoId);
        $query = "SELECT p.id_producto, 
                         p.producto_descripcion, 
                         m.marca_nombre, 
                         c.categoria_nombre, 
                         pt.nombre_tipo_producto, 
                         g.genero_nombre, 
                         t.talle_nombre, 
                         p.producto_color 
                         FROM productos as p , marcas as m , categorias as c , `producto-tipo` as pt , generos as g, talles as t
                         WHERE p.id_producto = $id AND 
                               p.producto_marca = m.id_marca AND 
                               p.producto_categoria = c.id_categoria AND 
                               p.producto_tipoProducto = pt.id_tipo_producto AND 
                               p.producto_genero = g.id_genero AND 
                               p.producto_talle = t.id_talle";
        
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getProductos(){
        $productos = array();
        $c = getConnection();
        $query = "SELECT p.id_producto, p.producto_descripcion, m.marca_nombre, c.categoria_nombre, pt.nombre_tipo_producto, g.genero_nombre, t.talle_nombre, p.producto_color 
        FROM productos as p , marcas as m , categorias as c , `producto-tipo` as pt , generos as g, talles as t
        WHERE p.producto_marca = m.id_marca AND p.producto_categoria = c.id_categoria AND p.producto_tipoProducto = pt.id_tipo_producto AND p.producto_genero = g.id_genero AND p.producto_talle = t.id_talle";
        $productos = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                
                $productos[] = $fila;
            }
            $result->free();
        }
        return $productos;
    }

    function createproducto($producto){
        $c = getConnection();
        $descripcion = $c->real_escape_string($producto['producto_descripcion']);
        $marca = (int) $c->real_escape_string($producto['producto_marca']);
        $categoria = (int) $c->real_escape_string($producto['producto_categoria']);
        $tipoProducto = (int) $c->real_escape_string($producto['producto_tipoProducto']);
        $genero = (int) $c->real_escape_string($producto['producto_genero']);
        $talle = (int) $c->real_escape_string($producto['producto_talle']);
        $color = $c->real_escape_string($producto['producto_color']);
        
        $query = "INSERT INTO productos VALUES (
                    DEFAULT,
                    '$descripcion',
                    $marca,
                    $categoria,
                    $tipoProducto,
                    $genero,
                    $talle,
                    '$color')";
        if($c->query($query)){
            $producto['id_producto'] = $c->insert_id; //ver esto
            return $producto;
        }else{
            echo $c->error;
        }
    }

    function updateproducto($producto){
        $c = getConnection();
        $id = (int) $c->real_escape_string($producto['id_producto']);
        $descripcion = $c->real_escape_string($producto['producto_descripcion']);
        $marca = $c->real_escape_string($producto['producto_marca']);
        $categoria = $c->real_escape_string($producto['producto_categoria']);
        $tipoProducto = $c->real_escape_string($producto['producto_tipoProducto']);
        $genero = $c->real_escape_string($producto['producto_genero']);
        $talle = $c->real_escape_string($producto['producto_talle']);
        $color = $c->real_escape_string($producto['producto_color']);
        
        
        $query = "UPDATE productos SET
                    producto_descripcion = '$descripcion',
                    producto_marca = $marca,
                    producto_categoria = $categoria,
                    producto_tipoProducto = $tipoProducto,
                    producto_genero = $genero,
                    producto_talle = $talle,
                    producto_color = '$color',
                    
                  WHERE id_producto = $id";
        return $c->query($query);
    }

    function removeproducto($productoId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($productoId);
        $query = "DELETE FROM productos
                  WHERE id_producto = $productoId";
        return $c->query($query);
    }

/*$productos = getProductos();

var_dump ($productos);*/


?>