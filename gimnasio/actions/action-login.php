<?php
    
    session_start();
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function login($request){   
        
        require("../models/usuarios.php");
        $user = new Usuarios();
        $usuario = array();
        $usuario["email"] = $request["login_email"];
        $usuario["clave"] = $request["login_clave"];
        
        if($idUsuario = $user->loginUsuario($usuario)){
            $_SESSION["usuario"]["id"] = $idUsuario["id"];
            $_SESSION["usuario"]["email"] = $idUsuario["email"];
            $_SESSION["usuario"]["clave"] = $idUsuario["clave"];
            
            if($_SERVER["HTTP_REFERER"]=="http://localhost/ppsII/gimnasio/micarrito.php"){
                redirect("../comprar.php");
            }else{
                redirect("../socio.php");
            }
            
        }else{
            redirect("../error.php");
        }
    }
    
    login($request);
?>