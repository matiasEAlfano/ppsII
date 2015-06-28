<?php
require("connection.php");

class AddToCar
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    

    public function getDetalleProducto($producto){
        $idProducto = $producto["idProducto"];
        $idTalle = $producto["idTalle"];
        $cantidad = $producto["cantidad"];
        $query = "SELECT p.producto_descripcion as descripcion,
                        p.producto_precio as precio,
                        p.producto_imagen as imagen,
                        pt.nombre_tipo_producto as tipo,
                        m.marca_nombre as marca,
                        t.talle_nombre as talle                       
                FROM `productos` as p, 
                        `producto-tipo` as pt,
                        `marcas` as m,
                        `talles` as t
                WHERE p.id_producto = $idProducto
                AND t.id_talle = $idTalle
                AND p.producto_marca = m.id_marca
                AND p.producto_tipoProducto = pt.id_tipo_producto
            order by p.producto_descripcion";
        $detalleProducto = array();
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $detalleProducto[] = $fila;
            }
            $result->free();
        }
        
        return $detalleProducto;        
    }
    

}