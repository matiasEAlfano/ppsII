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
        $c = getConnection();
        $id = (int) $c->real_escape_string($tipoId);
        $query = "SELECT id, descripcion FROM `actividad-tipo` WHERE id = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getTipos(){
        $c = getConnection();
        $query = "SELECT id, descripcion FROM `actividad-tipo`";
        $tipos = array();
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
        $descripcion = $c->real_escape_string($tipo['descripcion']);
        $query = "INSERT INTO `actividad-tipo` VALUES (
                    DEFAULT,
                    '$descripcion')";
        if($c->query($query)){
            $tipo['id'] = $c->insert_id;
            return $tipo;
        }else{
            echo $c->error;
        }
    }

    function updateTipo($tipo){
        $c = getConnection();
        $id = (int) $c->real_escape_string($tipo['id']);
        $descripcion = $c->real_escape_string($tipo['descripcion']);
        $query = "UPDATE `actividad-tipo` SET
                    descripcion = '$descripcion'
                  WHERE id = $id";
        return $c->query($query);
    }

    function removeTipo($tipoId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($tipoId);
        $query = "DELETE FROM `actividad-tipo`
                  WHERE id = $tipoId";
        return $c->query($query);
    }

?>