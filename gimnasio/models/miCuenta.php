<?php
require("connection.php");

class MiCuenta
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    public function listarComprasUsuario($idUsuario){
        $query = "SELECT v.fecha_venta, 
                        tp.tarjetas_tipo, 
                        v.tarjeta_numero, 
                        v.total_venta
                FROM `ventas` as v, `tarjetas-tipo` as tp
                WHERE v.id_usuario = '$idUsuario'
                AND v.tarjeta_tipo = id_tarjetas_tipo";
            
        $datos = array();
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            $result->free();
        }
        return $datos;
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