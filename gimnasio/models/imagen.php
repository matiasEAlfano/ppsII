<?php
require("connection.php");

class Imagen
{
private $connection;

public function __construct(){
$this->connection = Connection::getInstance();
}

public function getAll(){
$query = "SELECT id, path, file_name FROM imagenes";
$imagenes = array();
if( $result = $this->connection->query($query) ){
while($fila = $result->fetch_assoc()){
$imagenes[] = $fila;
}
$result->free();
}
return $imagenes;
}

/* public function getImagen($imagen){
$idImagen = $this->connection->real_escape_string($imagen['id']);
$query = "SELECT id FROM imagenes WHERE id='$idImagen' ";
$imagenes = array();
if( $result = $this->connection->query($query) ){
while($fila = $result->fetch_assoc()){
$imagenes[] = $fila;
}
$result->free();
}
return $imagenes;
}*/

public function create($imagen){
$path = $this->connection->real_escape_string($imagen['path']);
$file_name = $this->connection->real_escape_string($imagen['file_name']);
$query = "INSERT INTO imagenes VALUES (
DEFAULT,
'$path',
'$file_name')";
if($this->connection->query($query)){
$imagen['id'] = $this->connection->insert_id;
return $imagen;
}else{
return false;
}
}


/*public function delete($imagen){

$idImagen = getImagen($imagen);
$query = "DELETE imagenes WHERE id = $idImagen";
return $this->connection->query($query)     

}
*/

    
}