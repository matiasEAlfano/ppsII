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

    function getGenero($generoId){
        $genero = array();
        $c = getConnection();
        $id = (int) $c->real_escape_string($generoId);
        $query = "SELECT id_genero, genero_nombre FROM `generos` WHERE id_genero = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getGeneros(){
        $generos = array();
        $c = getConnection();
        $query = "SELECT id_genero, genero_nombre  
                 FROM `generos`";
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $generos[] = $fila;
            }
            $result->free();
        }
        return $generos;
    }

    function createGenero($genero){
        $c = getConnection();
        $nombre = $c->real_escape_string($genero['genero_nombre']);
        $query = "INSERT INTO `generos` VALUES (
                    DEFAULT,
                    '$nombre')";
        if($c->query($query)){
            $genero['id_genero'] = $c->insert_id;
            return $genero;
        }else{
            echo $c->error;
        }
    }

    function updateGenero($genero){
        $c = getConnection();
        $id = (int) $c->real_escape_string($genero['id_genero']);
        $nombre = $c->real_escape_string($genero['genero_nombre']);
        $query = "UPDATE `generos` SET
                    genero_nombre = '$nombre'
                  WHERE id_genero = $id";
        return $c->query($query);
    }

    function removeGenero($generoId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($generoId);
        $query = "DELETE FROM `generos`
                  WHERE id_genero = $generoId";
        return $c->query($query);
    }

?>