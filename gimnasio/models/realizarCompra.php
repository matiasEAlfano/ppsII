<?php
require("connection.php");

class RealizarCompra{
    
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    
    public function stockControl($compras, $usuario, $total, $tarjeta){
        
        for($i=0; $i<count($compras); $i++){
            
                foreach($compras[$i] as $value){    
                    
                    $idProducto  = $this->connection->real_escape_string($compras[$i]["idProducto"]);
                    $idTalle = $this->connection->real_escape_string($compras[$i]["idTalle"]);
                    $cantidad = $this->connection->real_escape_string($compras[$i]["cantidad"]);

                    $query = "SELECT producto, talle, cantidad FROM `stocks` 
                            WHERE cantidad >= '$cantidad'
                            AND talle = '$idTalle'
                            AND producto = '$idProducto'";
                    
                    $result = $this->connection->query($query);
                    
                    if($result->num_rows == 0){
                        return $compras[$i];
                    }                        
                }    
        }
        
        return $this->stockUpdate($compras, $usuario, $total, $tarjeta);
    }
    
    
    public function stockUpdate($compras, $usuario, $total, $tarjeta){
        
        for($i=0; $i<count($compras); $i++){
                
                    $idProducto = $this->connection->real_escape_string($compras[$i]["idProducto"]);
                    $idTalle = $this->connection->real_escape_string($compras[$i]["idTalle"]);
                    $cantidad = $this->connection->real_escape_string($compras[$i]["cantidad"]);
                    
                    $query = "UPDATE `stocks` SET `cantidad`=`cantidad` - '$cantidad'
                            WHERE `producto`= '$idProducto'
                            AND `talle`= '$idTalle'";
                            
                    if(!$this->connection->query($query)){
                        return $idProducto;
                    }
        }
        
        return $this->addCabeceraVenta($usuario, $compras, $total, $tarjeta);       
    }
    
    
    public function addCabeceraVenta($usuario, $compras, $total, $tarjeta){
        $idUsuario = $this->connection->real_escape_string($usuario["id"]);
        $tipo_tarjeta = $this->connection->real_escape_string($tarjeta["idtipo-tarjeta"]);
        $numero_tarjeta = $this->connection->real_escape_string($tarjeta["numero-tarjeta"]);
        
        $fecha = date('Y-m-d');
        
        $query = "INSERT INTO `ventas` VALUES (
                    DEFAULT,
                    '$idUsuario',
                    '$fecha',
                    '$tipo_tarjeta',
                    '$numero_tarjeta',
                    '$total')";
        
        
        if($this->connection->query($query)){
            
            $idVenta = $this->connection->insert_id;
            return $this->addDetalleVenta($compras, $idVenta);
            
        }else{
            return false;
        }
    }
    
    
    public function addDetalleVenta($compras, $idVenta){
        
        for($i=0; $i<count($compras); $i++){
            
            $idProducto = $this->connection->real_escape_string($compras[$i]["idProducto"]);
            $idTalle = $this->connection->real_escape_string($compras[$i]["idTalle"]);
            $cantidad = $this->connection->real_escape_string($compras[$i]["cantidad"]);
            $precio = $this->connection->real_escape_string($compras[$i]["precio"]);

            $query = "INSERT INTO `detalle-ventas` 
                    (id_detalle, id_venta, id_producto, id_talle, cantidad, precio) 
                    VALUES (
                DEFAULT,
                '$idVenta',
                '$idProducto',
                '$idTalle',
                '$cantidad',
                '$precio')";

            if($this->connection->query($query)){
                //$usuario['id'] = $this->connection->insert_id;

            }else{
                return false;
            }                        
        }    
        
        return "compraExitosa";
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