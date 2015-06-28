<?php
require("connection.php");

class CombosReload
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    

    function getTipo($tipoId){
        
        $query = "SELECT id_tipo_producto, nombre_tipo_producto
            FROM `producto-tipo`
            where id_categoria = $tipoId
            order by nombre_tipo_producto";
        $tipos = array();
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $tipos[] = $fila;
            }
            $result->free();
        }

        return $tipos;        
    }
    

}