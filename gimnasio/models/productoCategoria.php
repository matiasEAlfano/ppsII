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

    function getCategoria($categoriaId){
        $categoria = array();
        $c = getConnection();
        $id = (int) $c->real_escape_string($categoriaId);
        $query = "SELECT id_categoria, categoria_nombre FROM `categorias` WHERE id_categoria = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getCategorias(){
        $categorias = array();
        $c = getConnection();
        $query = "SELECT id_categoria, categoria_nombre  
                 FROM `categorias`";
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $categorias[] = $fila;
            }
            $result->free();
        }
        return $categorias;
    }

    function createCategoria($categoria){
        $c = getConnection();
        $nombre = $c->real_escape_string($categoria['categoria_nombre']);
        $query = "INSERT INTO `categorias` VALUES (
                    DEFAULT,
                    '$nombre')";
        if($c->query($query)){
            $categoria['id_categoria'] = $c->insert_id;
            return $categoria;
        }else{
            echo $c->error;
        }
    }

    function updateCategoria($categoria){
        $c = getConnection();
        $id = (int) $c->real_escape_string($categoria['id_categoria']);
        $nombre = $c->real_escape_string($categoria['categoria_nombre']);
        $query = "UPDATE `categorias` SET
                    categoria_nombre = '$nombre'
                  WHERE id_categoria = $id";
        return $c->query($query);
    }

    function removeCategoria($categoriaId){
        $c = getConnection();
        $id = (int) $c->real_escape_string($categoriaId);
        $query = "DELETE FROM `categorias`
                  WHERE id_categoria = $categoriaId";
        return $c->query($query);
    }

?>