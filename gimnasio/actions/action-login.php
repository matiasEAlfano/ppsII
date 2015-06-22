<?php
    
    session_start();
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function login($request){
        
        require("../models/usuarios.php");
        $usuario = array();
        $usuario["email"] = $request["login_email"];
        $usuario["clave"] = $request["login_clave"];
        
        if(loginUsuario($usuario)){
            $_SESSION["usuario"]["email"] = $request["login_email"];
            redirect("../socio.php");
        }else{
            redirect("../error.php");
        }
    }
    
    login($request);
?>