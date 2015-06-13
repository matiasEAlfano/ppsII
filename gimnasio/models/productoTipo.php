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
        $query = "SELECT id_tipo_producto, nombre_tipo_producto, id_categoria FROM `producto-tipo` WHERE id_tipo_producto = $id";
        $result = $c->query($query);
        return $result->fetch_assoc();
    }

    function getTipos(){
        $tipos = array();
        $c = getConnection();
        $query = "SELECT p.id_tipo_producto, p.nombre_tipo_producto, c.categoria_nombre 
                    FROM `producto-tipo` as p , `categorias` as c 
                    WHERE p.id_categoria = c.id_categoria";

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
        $categoria = $c->real_escape_string($tipo['id_categoria']);
        $query = "INSERT INTO `producto-tipo` VALUES (
                    DEFAULT,
                    '$nombre',
                    '$categoria')";
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
        $categoria = $c->real_escape_string($tipo['id_categoria']);
        $query = "UPDATE `producto-tipo` SET
                    nombre_tipo_producto = '$nombre',
                    id_categoria = '$categoria'
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

?>