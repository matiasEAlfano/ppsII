<?php
require("connection.php");

class MiCuenta
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    public function listarDatosUsuario($idUsuario){
        $query = "SELECT    du.id_usuario,
                            u.email,
                            du.datos_usuario_nombre,
                            du.datos_usuario_apellido,
                            du.datos_usuario_dni,
                            du.datos_usuario_direccion,
                            du.datos_usuario_cp,
                            du.datos_usuario_localidad,
                            du.datos_usuario_telefono
                    FROM `datos-usuario` as du,
                        `usuarios` as u
                    WHERE u.id = '$idUsuario'
					AND u.id = du.id_usuario";
        
        $datos = $this->connection->query($query);
        return $datos->fetch_assoc(); 
    }


}