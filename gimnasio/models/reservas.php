<?php
require("connection.php");

class Reservas
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    
    public function listarBusqueda($request){
        $where = '1=1 ';
        
        $profesor = $request->profesor;
        if($profesor > 0){
            $where .= 'and p.id_profesor='.$profesor;  
        }
        
        $actividad = $request->actividad;
        if($actividad > 0){
            $where .= 'and a.id_actividad='.$actividad;  
        }
        
        $dia = $request->dia;
        if($dia > 0){
            
        }       
        
        $query = "SELECT a.nombre, 
                        p.profesor_nombre_apellido 
                FROM `calendario-profesor-actividad` c
                INNER JOIN `profesor-actividad` pa ON pa.id_profesor_actividad = c.id_profesor_actividad
                INNER JOIN `profesores` p ON p.id_profesor = pa.id_profesor
                INNER JOIN `actividades` a ON a.id = pa.id_actividad
                WHERE $where";
        
        $datos = array();
        
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            $result->free();
        }
        return $datos;
    }
    
    
    public function getProfesores(){
        $query = "SELECT id_profesor,
                        profesor_nombre_apellido
                FROM `profesores`
                ORDER BY profesor_nombre_apellido";
        
        $datos = array();
        
        if($result = $this->connection->query($query)){
        
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            
            $result->free();
        }
        
        return $datos;
    }
    
    
    public function getDias(){        
        $query = "SELECT id_dia, 
                        dia_nombre
                    FROM `dias`
                    ORDER BY id_dia";
        
        $datos = array();
        
        if($result = $this->connection->query($query)){
            
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            
            $result->free();
        }
        
        return $datos;
    }
    
    
    public function getActividades(){
        $query = "SELECT a.id, 
                        a.nombre, 
                        a.idtipo, 
                        a.idgrupo, 
                        at.id as 'id-tipo', 
                        at.descripcion as tipo, 
                        ag.id as 'id-grupo', 
                        ag.idtipo, 
                        ag.descripcion as grupo  
                FROM `actividades` as a, 
                    `actividad-grupo` as ag, 
                    `actividad-tipo` as at
                WHERE a.idTipo = at.id 
                AND a.idGrupo = ag.id
                AND ag.idTipo = at.id
                order by a.nombre";
        
        $datos = array();
        
        if($result = $this->connection->query($query)){
            
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            
            $result->free();
        }
        
        return $datos;
    }
    
}