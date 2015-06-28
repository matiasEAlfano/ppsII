<?php
require("connection.php");

class DatosUsuario
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    public function getDatosPersonales($idUsuario){
        $query = "SELECT id_datos_usuario, 
                            id_usuario, 
                            datos_usuario_nombre,
                            datos_usuario_apellido,
                            datos_usuario_dni,
                            datos_usuario_direccion,
                            datos_usuario_cp,
                            datos_usuario_localidad,
                            datos_usuario_telefono
                    FROM `datos-usuario`
                    WHERE id_usuario = '$idUsuario'";
        
        $datos = $this->connection->query($query);
        return $datos->fetch_assoc();
    }
    
    public function getDatosTarjeta($idTipoTarjeta){
        $query = "SELECT tarjetas_tipo
                    FROM `tarjetas-tipo`
                    WHERE id_tarjetas_tipo = '$idTipoTarjeta'";
        
        $datos = $this->connection->query($query);
        return $datos->fetch_assoc();
    }
    
    public function create($dato){
        $idUsuario = $this->connection->real_escape_string($dato['idUsuario']);
        $nombre = $this->connection->real_escape_string($dato['nombre']);
        $apellido = $this->connection->real_escape_string($dato['apellido']);
        $dni = $this->connection->real_escape_string($dato['dni']);
        $direccion = $this->connection->real_escape_string($dato['direccion']);
        $cp = $this->connection->real_escape_string($dato['cp']);
        $localidad = $this->connection->real_escape_string($dato['localidad']);
        $telefono = $this->connection->real_escape_string($dato['telefono']);
        $query = "INSERT INTO `datos-usuario` VALUES (
                    DEFAULT,
                    '$idUsuario',
                    '$nombre',
                    '$apellido',
                    '$dni',
                    '$direccion',
                    '$cp',
                    '$localidad',
                    '$telefono')";
        if($this->connection->query($query)){
            $dato['id_datos_usuario'] = $this->connection->insert_id;
            return $dato;
        }else{
            return false;
        }
    }


}