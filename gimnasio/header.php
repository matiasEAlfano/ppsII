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
    <body>
        <div class="container-fluid contenedor-principal">
            
             <div class="row menu-logo">                
                
                <div class="col-md-6 col-logo">
                    <a href="index.php"><img src="img/Atleticus_logo_Final3.jpg" alt="Atleticus" class="img-responsive"/></a>
                </div>
                
                <div class="col-md-6 col-carrito">
                    
                    <ul class="nav nav-pills">
                        <li>
                            <a data-toggle="modal" data-target=".iniciar-sesion">Ingresar</a>
                            
                            <div class="modal fade iniciar-sesion">
                                
                                <div class="modal-dialog">
                                    
                                    <div class="modal-content">
                                    
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            
                                            <h4 class="modal-title">INICIAR SESION:</h4>

                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group">

                                                <div class="email_login">

                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control login" placeholder="Email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Contraseña</label>
                                                        <input type="password" class="form-control login" id="exampleInputPassword1" placeholder="Contraseña">
                                                    </div>

                                                </div>

                                                <div class="chkRecordarme">
                                                    <label>
                                                            <input type="checkbox" checked="true"> Recordarme
                                                    </label>
                                                    <br>
                                                    <a href="recuperarPassword.php">Olvide mi contraseña</a>            
                                                </div>

                                            </div>

                                        </div>

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <a href="socio.php"><button type="submit" class="btn btn-primary">INGRESAR</button></a>

                                        </div>

                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </li>
                        <li>
                            <a data-toggle="modal" data-target=".registrar-usuario">Registrarse</a>
                            
                            <div class="modal fade registrar-usuario">
                                
                                <div class="modal-dialog">
                                    
                                    <div class="modal-content">
                                    
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            
                                            <h4 class="modal-title">REGISTRAR NUEVO USUARIO:</h4>

                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group">

                                                <div class="email_login">
                                                    
                                                    <div class="form-group">
                                                        <label>E-mail *</label>
                                                        <input type="email" class="form-control login" placeholder="E-mail">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Repetir E-mail *</label>
                                                        <input type="email" class="form-control login" placeholder="Repetir Email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Crear contraseña *</label>
                                                        <input type="password" class="form-control login" id="exampleInputPassword1" placeholder="Crear contraseña">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Confirmar contraseña *</label>
                                                        <input type="password" class="form-control login" id="exampleInputPassword1" placeholder="Confirmar contraseña">
                                                    </div>

                                                </div>
                                                
                                            </div>

                                        </div>

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <a href="socio.php"><button type="submit" class="btn btn-primary">REGISTRAR CUENTA</button></a>

                                        </div>

                                    </div>
                                    
                                </div>
                                
                            </div>
                        </li>                        
                        <li><a class="navbar-brand" href="carrito.php"><img src="img/carrito.jpg" alt="Carrito" class="img-responsive" "icon-carrito"></a></li>                        
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

                <div class="col-md-7 col-opciones">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="index.php" class="menulink">Inicio</a></li>
                        <li><a href="sede.php" class="menulink">Sede</a></li>
                        <li><a href="horarios.php" class="menulink">Horarios</a></li>
                        <li><a href="reservas.php" class="menulink">Actividades</a></li>
                        <li><a href="planes.php" class="menulink">Planes</a></li>
                        <li><a href="contacto.php" class="menulink">Contacto</a></li>
                    </ul>            
                </div>

                <div class="col-md-3 col-buscar">                
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="buscar..."/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Buscar!</button>
                        </span>    
                    </div>                    
                </div> 

            </div>
            
        
            <div class="row row-cuerpo">             
