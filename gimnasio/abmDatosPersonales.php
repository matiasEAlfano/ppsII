<?php 
    require("partials/header.php"); 
    require("models/datos-usuario.php");
    $du = new DatosUsuario;
    $datosUsuario = $du->getDatosPersonales($_SESSION["usuario"]["id"]);
    
?>            
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Mi Cuenta</h2>            
            
            <div class="container cuerpo-socio">
                
                <div class="col-md-3">
                    
                    <div class="row">
                        <ul>
                            <li class="#"><a href="abmDatosPersonales.php">Datos Usuario</a></li>
                            <li><a href="micarrito.php">Mi Carrito</a></li>
                            <li><a>Resumen de Facturas</a></li>
                            <li><a href="calificarActividad.php">Calificar</a></li>
                            <a href="reservas.php"><button type="button" class="btn btn-primary">Reserva de Actividades</button></a>
                        </ul>                        
                    </div>
                    
                </div>
                
                <div class="col-md-9" id="listar-datos-usuario">
                    
                    <h3>Datos Usuario</h3>
                    
                    <h4>Datos de cuenta:</h4>
                    <label>Usuario:</label><?php echo " " . $_SESSION["usuario"]["email"]?>
                    
                    <h4>Datos personales:</h4>
                    <label>Nombre:</label><?php echo " " . $datosUsuario["datos_usuario_nombre"]?>
                    <br>
                    <label>Apellido:</label><?php echo " " . $datosUsuario["datos_usuario_apellido"]?>
                    <br>
                    <label>Dni:</label><?php echo " " . $datosUsuario["datos_usuario_dni"]?>
                    <br>
                    
                    <h4>Domicilio:</h4>
                    <label>Direccion:</label><?php echo " " . $datosUsuario["datos_usuario_direccion"]?>
                    <br>
                    <label>CP:</label><?php echo " " . $datosUsuario["datos_usuario_cp"]?>
                    <br>
                    <label>Localidad:</label><?php echo " " . $datosUsuario["datos_usuario_localidad"]?>
                    <br>
                    <label>Telefono:</label><?php echo " " . $datosUsuario["datos_usuario_telefono"]?>
                    
                </div>
                
            </div>
            
        </div>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/datos-usuario.js"></script>
        
<?php require("partials/footer.php"); ?>
