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

    function getMarca($marcaId){
        $marca = array();
        $c = getConnection();
        $id = (int) $c->real_escape_string($marcaId);
        $query = "SELECT id_marca, marca_nombre FROM `marcas` WHERE id_marca = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getMarcas(){
        $marcas = array();
        $c = getConnection();
        $query = "SELECT id_marca, marca_nombre  
                 FROM `marcas`";
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $marcas[] = $fila;
            }
            $result->free();
        }
        return $marcas;
    }

    function createMarca($marca){
        $c = getConnection();
        $nombre = $c->real_escape_string($marca['marca_nombre']);
        $query = "INSERT INTO `marcas` VALUES (
                    DEFAULT,
                    '$nombre')";
        if($c->query($query)){
            $marca['id_marca'] = $c->insert_id;
            return $marca;
        }else{
            echo $c->error;
        }
    }

    function updateMarca($marca){
        $c = getConnection();
        $id = (int) $c->real_escape_string($marca['id_marca']);
        $nombre = $c->real_escape_string($marca['marca_nombre']);
        $query = "UPDATE `marcas` SET
                    marca_nombre = '$nombre'
                  WHERE id_marca = $id";
        return $c->query($query);
    }

    function removeMarca($marcaId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($marcaId);
        $query = "DELETE FROM `marcas`
                  WHERE id_marca = $marcaId";
        return $c->query($query);
    }

?>