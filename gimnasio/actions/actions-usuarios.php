<?php    
    session_start();
    require("../utils/request.php");
    
    function redirect($url){
       header('Location: ' . $url, true, 303);
       die();
    }

    $action = $request["action"];
    switch($action){
        case "nuevo":
            nuevo($request);
            break;
        case "realizarRegistro":
            realizarRegistro($request);
            break;
    }

    function realizarRegistro($request){
        require("../models/usuarios.php");
        $user = new Usuarios();
        $usuario = array();
        $usuario["email"] = $_SESSION["tempUser"]["email"];
        $usuario["clave"] = $_SESSION["tempUser"]["clave"];

        if($id = $user->createUser($usuario)){
            $_SESSION["usuario"]["email"] = $usuario["email"];
            $_SESSION["usuario"]["clave"] = $usuario["clave"];
            $_SESSION["usuario"]["id"] = $id;
            $request["idUser"] = $id;
            
            if($user->createDataUser($request)){
                redirect("../miCuenta.php");
            }else{
                redirect("../error.php");
            }
        }
    }


    function nuevo($request){
        
        require("../models/usuarios.php");
        $user = new Usuarios();
        
        $usuario = array();
        $usuario["email"] = $request["email"];
        $usuario["clave"] = $request["clave"];
        
        if($user->emailCheck($usuario)){
            $_SESSION["tempUser"]["email"] = $usuario["email"];
            $_SESSION["tempUser"]["clave"] = $usuario["clave"];
            redirect("../altaUsuario.php");
        }else{
            unset($_SESSION["tempUser"]);
            return false;
        }
    }
