<?php 
    require("partials/header.php"); 
    require("models/datos-usuario.php");
    $du = new DatosUsuario;
    $datos = $du->getDatosPersonales($_SESSION["usuario"]["id"]);
?>            
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Mi Cuenta</h2>            
            
            <div class="container cuerpo-socio">
                
                <div class="col-md-3">
                    
                    <div class="row">
                        
                        <li class="#"><a href="abmDatosPersonales.php">Datos Personales</a></li>
                        <li><a href="micarrito.php">Mi Carrito</a></li>
                        <li><a>Resumen de Facturas</a></li>
                        <li><a href="calificarActividad.php">Calificar</a></li>
                        <a href="reservas.php"><button type="button" class="btn btn-primary">Reserva de Actividades</button></a>
                        
                    </div>
                    
                </div>
                
                <div class="col-md-9" id="listar-datos-usuario">
                    
                    <h3>Datos Personales</h3>
                    
                    <h4>Datos de cuenta:</h4>
                    <label>Usuario:</label><?php echo " " . $_SESSION["usuario"]["email"]?>
                    
                    <h4>Datos personales:</h4>
                    <label>Nombre:</label><?php echo " " . $datos["datos_usuario_nombre"]?>
                    <br>
                    <label>Apellido:</label><?php echo " " . $datos["datos_usuario_apellido"]?>
                    <br>
                    <label>Dni:</label><?php echo " " . $datos["datos_usuario_dni"]?>
                    <br>
                    <label>Direccion:</label><?php echo " " . $datos["datos_usuario_direccion"]?>
                    <br>
                    <label>CP:</label><?php echo " " . $datos["datos_usuario_cp"]?>
                    <br>
                    <label>Localidad:</label><?php echo " " . $datos["datos_usuario_localidad"]?>
                    <br>
                    <label>Telefono:</label><?php echo " " . $datos["datos_usuario_telefono"]?>
                    
                    
                    
                    <form id="form-datos-usuario">
                        
                        <input name="idUsuario" value="<?php echo $_SESSION["usuario"]["id"] ?>" id="idUsuario" type="hidden">
                        
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" type="text" class="form-control abm-inputs" id="nombre" placeholder="nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input name="apellido" type="text" class="form-control abm-inputs" id="apellido" placeholder="apellido">
                        </div>
                        <div class="form-group">
                            <label for="dni">Dni</label>
                            <input name="dni" type="text" class="form-control abm-inputs" id="dni" placeholder="(ej: 06999999)">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input name="direccion" type="text" class="form-control abm-inputs" id="direccion" placeholder="calle, numero, depto, piso, edificio">
                        </div>
                        <div class="form-group">
                            <label for="cp">Codigo Postal</label>
                            <input name="cp" type="text" class="form-control abm-inputs" id="cp" placeholder="(ej: 1429)">
                        </div>
                        <div class="form-group">
                            <label for="localidad">Localidad</label>
                            <input name="localidad" type="text" class="form-control abm-inputs" id="localidad" placeholder="localidad">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input name="telefono" type="text" class="form-control abm-inputs" id="telefono" placeholder="(ej: 01142014133)">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
                
            </div>
            
        </div>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/datos-usuario.js"></script>
        
<?php require("partials/footer.php"); ?>
