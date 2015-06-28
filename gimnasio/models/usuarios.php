<?php
    require("connection.php");
class Usuarios{

    private $connection;
    
    public function __construct(){
        $this->connection = Connection::getInstance();
    }

    public function emailCheck($usuario){
        $email = $usuario["email"];
        
        $query = "SELECT email FROM `usuarios` WHERE email = '$email'";
        $result = $this->connection->query($query);
        
        if($result->num_rows == 0){
            return true;    
        }else{
            return false;
        }
    }
    
    
    public function createDataUser($data){
        $idUser = $data["idUser"];
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $dni = $data["dni"];
        $direccion = $data["direccion"];
        $cp = $data["cp"];
        $localidad = $data["localidad"];
        $telefono = $data["telefono"];
        
        $query = "INSERT INTO `datos-usuario` 
                (`id_usuario`, 
                `datos_usuario_nombre`, 
                `datos_usuario_apellido`, 
                `datos_usuario_dni`, 
                `datos_usuario_direccion`, 
                `datos_usuario_cp`, 
                `datos_usuario_localidad`, 
                `datos_usuario_telefono`) 
                VALUES 
                ('$idUser', 
                '$nombre', 
                '$apellido', 
                '$dni', 
                '$direccion', 
                '$cp', 
                '$localidad', 
                '$telefono')";
        
        if($this->connection->query($query)){
            return true;
        }else{
            return false;
        }
    
    }

    public function createUser($usuario){
        $email = $this->connection->real_escape_string($usuario['email']);
        $clave = $this->connection->real_escape_string($usuario['clave']);
        
            $query = "INSERT INTO `usuarios` VALUES (
                        DEFAULT,
                        '$email',
                        '$clave')";
            
        if($this->connection->query($query)){
                $id = $this->connection->insert_id;
                return $id;
            }else{
                echo $this->connection->error;
            }
    }
    
    public function loginUsuario($usuario){
            $email = $this->connection->real_escape_string($usuario['email']);
            $clave = $this->connection->real_escape_string($usuario['clave']);
            $query = "SELECT id, email, clave FROM `usuarios` WHERE email = '$email' and clave = '$clave'";
            $r = $this->connection->query($query);

            if($r){
                return $r->fetch_assoc();
            }else{
               return false;
            }
        }

     /*function loginUsuario($usuario){
            $c = getConnection();
            $email = $c->real_escape_string($usuario['email']);
            $clave = $c->real_escape_string($usuario['clave']);
            $query = "SELECT id, email, clave FROM `usuarios` WHERE email = '$email' and clave = '$clave'";

         if($c->query($query)){
                return true;
            }else{
               return false;
            }
        }*/
}
