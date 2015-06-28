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

    function getTalle($talleId){
        $talle = array();
        $c = getConnection();
        $id = (int) $c->real_escape_string($talleId);
        $query = "SELECT id_talle, talle_nombre FROM `talles` WHERE id_talle = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getTalles(){
        $talles = array();
        $c = getConnection();
        $query = "SELECT id_talle, talle_nombre FROM `talles`";
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $talles[] = $fila;
            }
            $result->free();
        }
        return $talles;
    }

    function createTalle($talle){
        $c = getConnection();
        $nombre = $c->real_escape_string($talle[talle_nombre]);
        $query = "INSERT INTO `talles` VALUES (
                    DEFAULT,
                    '$nombre')";
        if($c->query($query)){
            $talle['id_talle'] = $c->insert_id;
            return $talle;
        }else{
            echo $c->error;
        }
    }

    function updateTalle($talle){
        $c = getConnection();
        $id = (int) $c->real_escape_string($talle['id_talle']);
        $nombre = $c->real_escape_string($talle['talle_nombre']);
        $query = "UPDATE `talles` SET
                    talle_nombre = '$nombre'
                  WHERE id_talle = $id";
        return $c->query($query);
    }

    function removeTalle($talleId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($talleId);
        $query = "DELETE FROM `talles`
                  WHERE id_talle = $talleId";
        return $c->query($query);
    }

?>