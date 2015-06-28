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

    function getGrupo($grupoId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($grupoId);
        $query = "SELECT id, idTipo, descripcion FROM `actividad-grupo` WHERE id = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getTipos(){
        $tipos = array();
        $c = getConnection();
        $query = "SELECT id, descripcion FROM `actividad-tipo`
                    Order by descripcion";
        $tipos = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $tipos[] = $fila;
            }
            $result->free();
        }
        return $tipos;
    }

    function getGrupos(){
        $c = getConnection();
        $query = "SELECT ag.id, ag.descripcion as grupo, ag.idTipo, at.descripcion as tipo  
                 FROM `actividad-grupo` as ag, `actividad-tipo` as at
                 where ag.idTipo = at.id
                 order by ag.descripcion";
        $grupos = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $grupos[] = $fila;
            }
            $result->free();
        }
        return $grupos;
    }

    function createGrupo($grupo){
        $c = getConnection();
        $idTipo = $c->real_escape_string($grupo['idtipo']);
        $descripcion = $c->real_escape_string($grupo['descripcion']);
        $query = "INSERT INTO `actividad-grupo` VALUES (
                    DEFAULT,
                    '$idTipo',
                    '$descripcion')";
        if($c->query($query)){
            $grupo['id'] = $c->insert_id;
            return $grupo;
        }else{
            echo $c->error;
        }
    }

    function updateGrupo($grupo){
        $c = getConnection();
        $id = (int) $c->real_escape_string($grupo['id']);
        $tipo = $c->real_escape_string($grupo['idtipo']);
        $descripcion = $c->real_escape_string($grupo['descripcion']);
        $query = "UPDATE `actividad-grupo` SET
                    idTipo = '$tipo',
                    descripcion = '$descripcion'
                  WHERE id = $id";
        return $c->query($query);
    }

    function removeGrupo($grupoId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($grupoId);
        $query = "DELETE FROM `actividad-grupo`
                  WHERE id = $grupoId";
        return $c->query($query);
    }

?>