<?php
require("connection.php");

class ProductoCategoria
{
    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }



    public function getCategoria($categoriaId){
        
        $id = (int) $this->connection->real_escape_string($categoriaId);
        $query = "SELECT id_categoria, categoria_nombre FROM `categorias` WHERE id_categoria = $id";
        $categoria = array();
        $result = $this->connection->query($query);
        return $result->fetch_assoc();
    }

  public function getCategorias(){
     
      $query = "SELECT id_categoria, categoria_nombre  
                 FROM `categorias`";  
      $categorias = array();
      
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $categorias[] = $fila;
            }
            $result->free();
        }
        return $categorias;
    }

    public function createCategoria($categoria){
        
        $c = $this->connection;
        $nombre = $c->real_escape_string($categoria['categoria_nombre']);       
        
        $query = "INSERT INTO `categorias` VALUES (
                    DEFAULT,
                    '$nombre')";
        if($c->query($query)){
            $categoria['id_categoria'] = $c->insert_id;
            return $categoria;
        }else{
            return false;
        }
    }
    
    public function updateCategoria($categoria){
        $c = $this->connection;
        $id = (int) $c->real_escape_string($categoria['id_categoria']);
        $nombre = $c->real_escape_string($categoria['categoria_nombre']);        
        $query = "UPDATE `categorias` SET
                    categoria_nombre = '$nombre'
                  WHERE id_categoria = $id";
        return $c->query($query);
    }

public function removeCategoria($categoriaId){
    $c = $this->connection;    
    $id = (int) $c->real_escape_string($categoriaId);
    $query = "DELETE FROM `categorias`
                  WHERE id_categoria = $id";
        
        return $c->query($query);
    }
}
