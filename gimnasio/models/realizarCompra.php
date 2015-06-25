<?php
require("connection.php");

class RealizarCompra{
    
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    public function addCabeceraVenta($usuario, $compras){
        $idUsuario = $this->connection->real_escape_string($usuario["id"]);
        
        $fecha = date('Y-m-d');
        
        $query = "INSERT INTO `ventas` VALUES (
                    DEFAULT,
                    '$idUsuario',
                    '$fecha')";
        if($this->connection->query($query)){
            $idVenta = $this->connection->insert_id;
            return $this->addDetalleVenta($compras, $idVenta);
        }else{
            return false;
        }
    }
    
    public function addDetalleVenta($compras, $idVenta){
        
        for($i=0; $i<count($compras); $i++){
            
            if(count($compras[$i])!=0){
                
                foreach($compras[$i] as $value){
                       
                                
                    $idProducto = $this->connection->real_escape_string($value["idProducto"]);
                    $idTalle = $this->connection->real_escape_string($value["idTalle"]);
                    $cantidad = $this->connection->real_escape_string($value["cantidad"]);

                    $query = "INSERT INTO `detalle-ventas` (id_detalle, id_venta, id_producto, id_talle, cantidad) VALUES (
                        DEFAULT,
                        '$idVenta',
                        '$idProducto',
                        '$idTalle',
                        '$cantidad')";

                    if($this->connection->query($query)){
                        //$usuario['id'] = $this->connection->insert_id;
                        
                    }else{
                        return false;
                    }    
                    
                }    
            }
        }
        return true;
      
        /*$query = "INSERT INTO `ventas` VALUES (
                    DEFAULT,
                    '$idUsuario',
                    '$fecha')";
        if($this->connection->query($query)){
            //$usuario['id'] = $this->connection->insert_id;
            return true;
        }else{
            return false;
        }*/
    }
    
    
    public function getTiposTarjeta(){
        $query = 'SELECT id_tarjetas_tipo, tarjetas_tipo
                FROM `tarjetas-tipo`
                order by tarjetas_tipo';
        
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $tipo[] = $fila;
            }
            $result->free();
        }
        return $tipo;
    }
}