<?php
require("connection.php");

class MiCuenta
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }
    
    
    public function listarReservaActividades($idUsuario){
        $query = "SELECT r.id_reserva,
                        a.nombre, 
                        p.profesor_nombre_apellido,
                        c.fecha_profesor_actividad,
                        c.horario_desde_profesor_actividad,
                        c.horario_hasta_profesor_actividad
                FROM `reservas` r
                INNER JOIN `calendario-profesor-actividad` c on c.id_calendario_profesor_actividad = r.id_calendario_profesor_actividad
                INNER JOIN `profesor-actividad` pa ON pa.id_profesor_actividad = c.id_profesor_actividad
                INNER JOIN `profesores` p ON p.id_profesor = pa.id_profesor
                INNER JOIN `actividades` a ON a.id = pa.id_actividad
                WHERE r.id_usuario = $idUsuario
                ORDER BY c.fecha_profesor_actividad";
        
        $datos = array();
        if($result = $this->connection->query($query)){
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            $result->free();
        }
        
        return $datos;
    }
    
    public function listarComprasUsuario($idUsuario){
        $query = "SELECT v.id_venta,
                        v.fecha_venta, 
                        tp.tarjetas_tipo, 
                        v.tarjeta_numero, 
                        v.total_venta
                        FROM `ventas` as v, `tarjetas-tipo` as tp
                        WHERE v.id_usuario = '$idUsuario'
                        AND v.tarjeta_tipo = id_tarjetas_tipo
                        order by v.id_venta desc";
            
        $datos = array();
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $datos[] = $fila;
            }
            $result->free();
        }
        
        for($i=0; $i<count($datos); $i++){
            $idVenta = $datos[$i]["id_venta"];
            $datos[$i]["detalle"] = $this->listarDetalleCompras($idVenta);
        }
        return $datos;
    }
    
    public function listarDetalleCompras($idVenta){
        $query = "SELECT p.producto_descripcion,
                        m.marca_nombre,
                        t.talle_nombre,
                        dv.cantidad,
                        dv.precio,
                        p.producto_imagen
                    FROM `detalle-ventas` dv,
                        `productos` p,
                        `talles` t,
                        `marcas` m
                    WHERE dv.id_venta = '$idVenta'
                    AND p.id_producto = dv.id_producto
                    AND t.id_talle = dv.id_talle
                    AND m.id_marca = p.producto_marca";                    
        
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
                            u.clave,
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