<?php
require("connection.php");

class Profesor
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    public function getAll(){
        $query = "SELECT id_profesor, profesor_dni, profesor_nombre_apellido FROM profesores";
        $profesores = array();
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $profesores[] = $fila;
            }
            $result->free();
        }
        return $profesores;
    }

    public function get($profesorId){
        $id = (int) $this->connection->real_escape_string($profesorId);
        $query = "SELECT id_profesor, profesor_dni, profesor_nombre_apellido, profesor_direccion, profesor_telefono, profesor_mail FROM profesores WHERE id_profesor = $profesorId";
        $r = $this->connection->query($query);
        return $r->fetch_assoc();
    }
    
    public function create($profesor){
        $nombre = $this->connection->real_escape_string($profesor['nombre']);
        $direccion = $this->connection->real_escape_string($profesor['direccion']);
        $telefono = $this->connection->real_escape_string($profesor['telefono']);
        $mail = $this->connection->real_escape_string($profesor['mail']);
        $dni = $this->connection->real_escape_string($profesor['dni']);
        $query = "INSERT INTO profesores VALUES (
                    DEFAULT,
                    '$dni',
                    '$nombre',
                    '$direccion',
                    '$telefono',
                    '$mail')";
        if($this->connection->query($query)){
            $profesor['id'] = $this->connection->insert_id;
            return $profesor;
        }else{
            return false;
        }
    }

    public function update($profesor){
        $id = (int) $this->connection->real_escape_string($profesor['id']);
        $nombre = $this->connection->real_escape_string($profesor['nombre']);
        $direccion = $this->connection->real_escape_string($profesor['direccion']);
        $telefono = $this->connection->real_escape_string($profesor['telefono']);
        $mail = $this->connection->real_escape_string($profesor['mail']);
        $dni = $this->connection->real_escape_string($profesor['dni']);
        $query = "UPDATE profesores SET
                    profesor_dni = '$dni',
                    profesor_nombre_apellido = '$nombre',
                    profesor_direccion = '$direccion',
                    profesor_telefono = '$telefono',
                    profesor_mail = '$mail'                    
                  WHERE id_profesor = $id";
        return $this->connection->query($query);
    }

    public function remove($profesorId){
        $id = (int) $this->connection->real_escape_string($profesorId);
        $query = "DELETE FROM profesores
                  WHERE id_profesor = $id";
        return $this->connection->query($query);
    }
}