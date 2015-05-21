<?php
    function getConnection(){
        $mysqli = new mysqli("localhost", "root", "admin", "cms");
        if( $mysqli->connect_errno ){
            die("Error al intentar establecer la conexión con MySQL");
        }else{
            $mysqli->query("SET NAMES 'utf8'");
            return $mysqli;
        }
    }

    function getCategoria($categoriaId){
        $categorias = array();
        $c = getConnection();
        $id = (int) $c->real_escape_string($categoriaId);
        $query = "SELECT id, nombre, descripcion FROM categorias WHERE id = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getCategorias(){
        $categorias = array();
        $c = getConnection();
        $query = "SELECT id, nombre, descripcion FROM categorias";
        $categorias = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $fila['descripcion'] = $fila['descripcion'];
                $categorias[] = $fila;
            }
            $result->free();
        }
        return $categorias;
    }

    function createCategoria($categoria){
        $c = getConnection();
        $nombre = $c->real_escape_string($categoria['nombre']);
        $descripcion = $c->real_escape_string($categoria['descripcion']);
        $query = "INSERT INTO categorias VALUES (
                    DEFAULT,
                    '$nombre',
                    '$descripcion')";
        if($c->query($query)){
            $categoria['id'] = $c->insert_id;
            return $categoria;
        }else{
            echo $c->error;
        }
    }

    function updateCategoria($categoria){
        $c = getConnection();
        $id = (int) $c->real_escape_string($categoria['id']);
        $nombre = $c->real_escape_string($categoria['nombre']);
        $descripcion = $c->real_escape_string($categoria['descripcion']);
        $query = "UPDATE categorias SET
                    nombre = '$nombre',
                    descripcion = '$descripcion'
                  WHERE id = $id";
        return $c->query($query);
    }

    function removeCategoria($categoriaId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($categoriaId);
        $query = "DELETE FROM categorias
                  WHERE id = $categoriaId";
        return $c->query($query);
    }

?>