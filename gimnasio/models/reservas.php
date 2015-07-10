<?php
require("connection.php");

class Reservas
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    
    public function reserva($id){
        $query = "SELECT c.id_calendario_profesor_actividad,
                        a.nombre, 
                        p.profesor_nombre_apellido,
                        c.fecha_profesor_actividad,
                        c.horario_desde_profesor_actividad,
                        c.horario_hasta_profesor_actividad
                FROM `calendario-profesor-actividad` c
                INNER JOIN `profesor-actividad` pa ON pa.id_profesor_actividad = c.id_profesor_actividad
                INNER JOIN `profesores` p ON p.id_profesor = pa.id_profesor
                INNER JOIN `actividades` a ON a.id = pa.id_actividad
                WHERE c.id_calendario_profesor_actividad = $id";
        
        $datos = array();
        
        if( $result = $this->connection->query($query) ){
            return $result->fetch_assoc();
        }else{
            return false;
        }
    }
    
    
    public function listarBusqueda($request){
        $where = '1=1 ';
        
        $profesor = $request->profesor;
        if($profesor > 0){
            $where .= 'and pa.id_profesor='.$profesor;  
        }
        
        $actividad = $request->actividad;
        if($actividad > 0){
            $where .= 'and pa.id_actividad='.$actividad;  
        }
        
        $dia = $request->dia;
        if($dia > 0){
            
        }
        
        $query = "SELECT c.id_calendario_profesor_actividad,
                        a.nombre, 
                        p.profesor_nombre_apellido,
                        c.fecha_profesor_actividad,
                        c.horario_desde_profesor_actividad,
                        c.horario_hasta_profesor_actividad,
                        c.cupo
                FROM `calendario-profesor-actividad` c
                INNER JOIN `profesor-actividad` pa ON pa.id_profesor_actividad = c.id_profesor_actividad
                INNER JOIN `profesores` p ON p.id_profesor = pa.id_profesor
                INNER JOIN `actividades` a ON a.id = pa.id_actividad
                WHERE c.cupo > 0
                AND $where
                ORDER BY c.fecha_profesor_actividad, c.horario_desde_profesor_actividad";
        
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
        
        $query = "SELECT pa.id_profesor,
                        p.profesor_nombre_apellido
                FROM `profesores` p, 
                    `profesor-actividad` pa,
                    `calendario-profesor-actividad` cpa
				WHERE cpa.id_profesor_actividad = pa.id_profesor_actividad
                AND pa.id_profesor = p.id_profesor
				GROUP BY pa.id_profesor
                ORDER BY profesor_nombre_apellido";
        
        //sin relacionar la tabla calendario-profesor-actividad:
        /*$query = "SELECT pa.id_profesor,
                        p.profesor_nombre_apellido
                FROM `profesores` p, 
                    `profesor-actividad` pa
				WHERE pa.id_profesor = p.id_profesor
				GROUP BY pa.id_profesor
                ORDER BY profesor_nombre_apellido";*/
        
        $datos = array();
        
        if($result = $this->connection->query($query)){
        
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            
            $result->free();
        }
        
        return $datos;
    }
    
    
    public function filtroPorProfesor($id){
        $where = '1=1 ';
        
        if($id > 0){
            $where .= 'and pa.id_profesor='.$id;  
        }
        
        $query = "SELECT pa.id_actividad,
                        a.nombre
                FROM `actividades` a, 
                    `profesor-actividad` pa
				WHERE pa.id_actividad = a.id
				AND $where
				GROUP BY pa.id_actividad
                ORDER BY a.nombre";
        
        $datos = array();
        
        if($result = $this->connection->query($query)){
        
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            
            $result->free();
        }
        
        return $datos;
    }
    
    
    public function filtroPorActividad($id){
        
        $where = '1=1 ';
        
        if($id > 0){
            $where .= 'and pa.id_actividad='.$id;  
        }
        
        $query = "SELECT pa.id_profesor,
                        p.profesor_nombre_apellido
                FROM `profesores` p, 
                    `profesor-actividad` pa
				WHERE pa.id_profesor = p.id_profesor
				AND $where
				GROUP BY pa.id_profesor
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
        $query = "SELECT pa.id_actividad, 
                        a.nombre
                FROM `actividades` a,
                    `profesor-actividad` pa,
                    `calendario-profesor-actividad` cpa
                WHERE cpa.id_profesor_actividad = pa.id_profesor_actividad
                AND pa.id_actividad = a.id
                GROUP BY pa.id_actividad
                ORDER BY a.nombre";
        
        ////sin relacionar la tabla calendario-profesor-actividad:
        /*$query = "SELECT pa.id_actividad, 
                        a.nombre
                FROM `actividades` a,
                    `profesor-actividad` pa
                WHERE pa.id_actividad = a.id
                GROUP BY pa.id_actividad
                ORDER BY a.nombre";*/
            
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