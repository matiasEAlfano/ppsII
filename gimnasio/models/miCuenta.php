<?php
require("connection.php");

class MiCuenta
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    public function listarDatosUsuario($idUsuario){
        $query = "SELECT    id_usuario,
                            email,
                            datos_usuario_nombre,
                            datos_usuario_apellido,
                            datos_usuario_dni,
                            datos_usuario_direccion,
                            datos_usuario_cp,
                            datos_usuario_localidad,
                            datos_usuario_telefono
                    FROM `datos-usuario`,
                        `usuarios`
                    WHERE id_usuario = '$idUsuario'";
        
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            
            $result->free();
        }
        return $datos;
    }


}