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

    function getActividad($actividadId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($actividadId);
        $query = "SELECT id, nombre, idTipo, idGrupo FROM `actividades` WHERE id = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getActividades(){
        $c = getConnection();
        $query = "SELECT a.id, 
                        a.nombre, 
                        a.idtipo, 
                        a.idgrupo, 
                        at.id as 'id-tipo', 
                        at.descripcion as tipo, 
                        ag.id as 'id-grupo', 
                        ag.idtipo, 
                        ag.descripcion as grupo  
                        FROM `actividades` as a, `actividad-grupo` as ag, `actividad-tipo` as at
                        where a.idTipo = at.id 
                        AND a.idGrupo = ag.id
                        AND ag.idTipo = at.id
                        order by a.nombre";
        $actividades = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $actividades[] = $fila;
            }
            $result->free();
        }
        return $actividades;
    }

    function getTipos(){
        $c = getConnection();
        $query = "SELECT id, descripcion FROM `actividad-tipo`
                order by descripcion";
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

    function createActividad($actividad){
        $c = getConnection();
        $idTipo = $c->real_escape_string($actividad['idtipo']);
        $idGrupo = $c->real_escape_string($actividad['idgrupo']);
        $nombre = $c->real_escape_string($actividad['nombre']);
        $query = "INSERT INTO `actividades` VALUES (
                    DEFAULT,
                    '$nombre',
                    '$idTipo',
                    '$idGrupo')";
        if($c->query($query)){
            $actividad['id'] = $c->insert_id;
            return $actividad;
        }else{
            echo $c->error;
        }
    }

    function updateActividad($actividad){
        $c = getConnection();
        $id = (int) $c->real_escape_string($actividad['id']);
        $nombre = $c->real_escape_string($actividad['nombre']);
        $idtipo = $c->real_escape_string($actividad['idtipo']);
        $idgrupo = $c->real_escape_string($actividad['idgrupo']);
        $query = "UPDATE `actividades` SET
                    nombre = '$nombre',
                    idTipo = '$idtipo',
                    idGrupo = '$idgrupo'
                  WHERE id = $id";
        return $c->query($query);
    }

    function removeActividad($actividadId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($actividadId);
        $query = "DELETE FROM `actividades`
                  WHERE id = $actividadId";
        return $c->query($query);
    }

?>