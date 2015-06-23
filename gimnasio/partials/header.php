<?php session_start(); //print_r($_SESSION);?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Atleticus</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mainCharly.css">
        <link rel="stylesheet" href="css/mainMatias.css">
        <link rel="stylesheet" href="css/mainMauro.css">
        <!--        El siguiente Script agrega la API de Google Maps al sitio web:-->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        
        
        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>
    
    <?php 
        $idUsuario = isset($_GET["id"]) ? $_GET["id"] : null;
        $action = empty($id) ? "guardar" : "actualizar";$idUsuario
    ?>
    
    <body>
        <div class="container-fluid contenedor-principal">
            
             <div class="row menu-logo">                
                
                <div class="col-md-6 col-logo">
                    <a href="index.php"><img src="img/Atleticus_logo_Final3.jpg" alt="Atleticus" class="img-responsive"/></a>
                </div>
                
                <div class="col-md-6 col-carrito">
                    
                    
                    <ul class="nav nav-pills">
                        <?php if(empty($_SESSION["usuario"])) {?>
                        <li>
                            <a onclick="$('#message-login').html('');" data-toggle="modal" data-target=".iniciar-sesion">Ingresar</a>
                            
                            <?php require("login.php"); ?>
                            
                        </li>
                        <li>
                            <a data-toggle="modal" data-target=".registrar-usuario">Registrarse</a>
                            
                            <?php require("registrar.php") ?>
                            
                        </li>                        
                        <?php }else{ ?>
                        <li>
                            <label>
                                <?php echo "Bienvenido: "?>
                                <a href="socio.php">
                                    <?php echo $_SESSION["usuario"]["email"] ?>
                                </a>    
                            </label>
                            <a href="partials/logout.php">Cerrar session</a>
                        </li>         
                        <?php } ?>
                        <li><a class="navbar-brand" href="micarrito.php"><img src="img/carrito.jpg" alt="Carrito" class="img-responsive" "icon-carrito"></a></li>                        
                    </ul>
                    
                </div>
                
            </div>
            
            <div class="row menu-opciones">

                <div class="col-md-2 col-iconos">
                    <div class="yt">
                        <a href="http://www.youtube.com"><img src="img/youtube-logo-vector.jpg" alt="Youtube" class="yt img-responsive"/></a>   
                    </div>

                    <div class="fb">
                        <a href="http://www.facebook.com"><img src="img/facebook-icon.jpg" alt="Facebook" class="fb img-responsive"/></a>
                    </div>

                    <div class="tw">
                        <a href="http://www.twitter.com"><img src="img/twitter-icon.jpg" alt="Twitter" class="tw img-responsive"/></a>
                    </div>                
                </div>

                <div class="col-md-10 col-opciones">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="index.php" class="menulink"><b>Inicio</b></a></li>
                        <li><a href="e-shop.php" class="menulink"><b>e-Shop</b></a></li>
                        <li><a href="sede.php" class="menulink"><b>Sede</b></a></li>
                        <li><a href="horarios.php" class="menulink"><b>Horarios</b></a></li>
                        <li><a href="reservas.php" class="menulink"><b>Actividades</b></a></li>
                        <li><a href="planes.php" class="menulink"><b>Planes</b></a></li>
                        <li><a href="contacto.php" class="menulink"><b>Contacto</b></a></li>
                    </ul>            
                </div>

                <!--<div class="col-md-3 col-buscar">                
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="buscar..."/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Buscar!</button>
                        </span>    
                    </div>                    
                </div>--> 

            </div>
            
        
            <div class="row row-cuerpo">             
