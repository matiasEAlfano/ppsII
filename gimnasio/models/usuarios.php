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

    function createUsuario($usuario){
        $c = getConnection();
        $email = $c->real_escape_string($usuario['email']);
        $clave = $c->real_escape_string($usuario['clave']);
        $query = "INSERT INTO `usuarios` VALUES (
                    DEFAULT,
                    '$email',
                    '$clave')";
        if($c->query($query)){
            $usuario['id'] = $c->insert_id;
            return $usuario;
        }else{
            echo $c->error;
        }
    }

 function loginUsuario($usuario){
        $c = getConnection();
        $email = $c->real_escape_string($usuario['email']);
        $clave = $c->real_escape_string($usuario['clave']);
        $query = "SELECT * FROM `usuarios` WHERE email = '$email' and clave = '$clave'";
         
     if($c->query($query)){
            return true;
        }else{
           return false;
        }
    }

?>