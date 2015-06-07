<?php
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
            redirect("../socio.php");
        }else{
            redirect("../error.php");
        }
    }

    nueva($request);
?>