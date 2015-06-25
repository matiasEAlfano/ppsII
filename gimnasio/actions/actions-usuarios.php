<?php
    
    session_start();
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    function nueva($request){
        
        require("../models/usuarios.php");
        $usuario = array();
        $usuario["email"] = $request["email"];
        $usuario["clave"] = $request["clave"];
        if(createUsuario($usuario)){
            $_SESSION["usuario"]["email"] = $request["email"];
            redirect("../socio.php");
        }else{
            redirect("../error.php");
        }
    }

    nueva($request);
?>