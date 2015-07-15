<?php
require("connection.php");

class ActividadTipo
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    

    function getTipo($request){
        $id = $request->id;
        $query = "SELECT id, 
                        descripcion 
                    FROM `actividad-tipo` 
                    WHERE id = $id";
        
        if($datos = $this->connection->query($query)){
            return $datos->fetch_assoc();   
        }       
        
    }
    
    public function getAll(){
        $query = "SELECT id, 
                        descripcion 
                        FROM `actividad-tipo`
                        ORDER BY descripcion";
        
        $datos = array();
        
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            $result->free();
        }
        return $datos;
    }


    function createTipo($request){
        $descripcion = $request->descripcion;
        $query = "INSERT INTO `actividad-tipo` VALUES (
                    DEFAULT,
                    '$descripcion')";
        
        if($this->connection->query($query)){
            return true;
        }else{
            echo $this->error;
        }
    }

    function actualizar($request){
        $id = $request->id;
        $descripcion = $request->descripcion;
        $query = "UPDATE `actividad-tipo` SET
                    descripcion = '$descripcion'
                  WHERE id = $id";
        
        if($this->connection->query($query)){
            return true;
        }else{
            return false;
        }
    }

    function eliminar($request){
        $id = $request->id;
        $query = "DELETE FROM `actividad-tipo`
                  WHERE id = $id";
        
        if($this->connection->query($query)){
            return true;
        }else{
            return false;
        }
    }

}