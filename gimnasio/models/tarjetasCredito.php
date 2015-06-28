<?php
require("connection.php");

class TarjetasCredito{
    
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
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