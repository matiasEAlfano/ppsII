<?php
require("connection.php");

class MiCuenta
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
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