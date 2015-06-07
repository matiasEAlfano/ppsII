<?php
    function getConnection(){
        $mysqli = new mysqli("localhost", "root", "admin", "atleticus");
        if( $mysqli->connect_errno ){
            die("Error al intentar establecer la conexión con MySQL");
        }else{
            $mysqli->query("SET NAMES 'utf8'");
            return $mysqli;
        }
    }

    function getTipo($tipoId){
        $tipo = array();
        $c = getConnection();
        $id = (int) $c->real_escape_string($tipoId);
        $query = "SELECT id_tipo_producto, nombre_tipo_producto FROM `producto-tipo` WHERE id_tipo_producto = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getTipos(){
        $tipos = array();
        $c = getConnection();
        $query = "SELECT id_tipo_producto, nombre_tipo_producto FROM `producto-tipo`";
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $tipos[] = $fila;
            }
            $result->free();
        }
        return $tipos;
    }

    function createTipo($tipo){
        $c = getConnection();
        $nombre = $c->real_escape_string($tipo['nombre_tipo_producto']);
        $query = "INSERT INTO `producto-tipo` VALUES (
                    DEFAULT,
                    '$nombre')";
        if($c->query($query)){
            $tipo['id_tipo_producto'] = $c->insert_id;
            return $tipo;
        }else{
            echo $c->error;
        }
    }

    function updateTipo($tipo){
        $c = getConnection();
        $id = (int) $c->real_escape_string($tipo['id_tipo_producto']);
        $nombre = $c->real_escape_string($tipo['nombre_tipo_producto']);
        $query = "UPDATE `producto-tipo` SET
                    nombre_tipo_producto = '$nombre'
                  WHERE id_tipo_producto = $id";
        return $c->query($query);
    }

    function removeTipo($tipoId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($tipoId);
        $query = "DELETE FROM `producto-tipo`
                  WHERE id_tipo_producto = $tipoId";
        return $c->query($query);
    }

?>