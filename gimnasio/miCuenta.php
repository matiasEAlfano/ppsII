<?php 
require("partials/header.php"); 
$messagecompra = "";
if(isset($_GET["c"])){
    if($_GET["c"]=="ok"){
        $messagecompra = "Su compra fue exitosa!";
    }
}
?>                    
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Mi Cuenta</h2>
            
            <?php if($messagecompra!=""):?>
            <div id="compra-exitosa" class="compra-exitosa" onclick="$('#compra-exitosa').slideToggle();"> 
                <?php echo $messagecompra; ?>
            </div>
            <?php endif; ?>
            
            <div class="container cuerpo-socio">
                
                <div class="col-md-3">
                    
                    <div class="row">
                        <ul id="option_list">
                            <li class="#"><a onclick="$('#datos_personales')" name="datos_personales" value="hola">Datos Usuario</a></li>
                            <li><a href="micarrito.php">Mi Carrito</a></li>
                            <li><a>Resumen de Facturas</a></li>
                            <li><a href="calificarActividad.php">Calificar</a></li>
                            <a href="reservas.php"><button type="button" class="btn btn-primary">Reserva de Actividades</button></a>
                        </ul>
                    </div>
                    
                </div>
                
                <div class="col-md-5">
                    
                    
                    
                </div>
                
                <div class="col-md-4">
                    
                    <div class="row">
                        <label>Ultima Actividad calificada:</label>                    
                        <li>Spinning</li>
                        <label>Calificacion:</label>                    
                        <li>Excelente</li>
                    </div>
                    
                    <div class="row">
                        
                        <label>Actividades Reservadas:</label>
                        
                        <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>Actividad</th>
                                      <th>Fecha</th>
                                      <th>Sede</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Bodycombat</td>
                                      <td>10/05/2015</td>
                                      <td>Pilar</td>
                                    </tr>
                                    <tr>
                                      <td>IndoorCycle</td>
                                      <td>12/05/2015</td>
                                      <td>Microcentro</td>
                                    </tr>
                                    <tr>
                                      <td>Localizada</td>
                                      <td>13/05/2015</td>
                                      <td>Pilar</td>
                                    </tr>
                                    <tr>
                                      <td>Aquagym</td>
                                      <td>17/05/2015</td>
                                      <td>Pilar</td>
                                    </tr>
                                  </tbody>
                            </table>
                    </div>
                    
                </div>
                
            </div>
            
        </div>

    <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/miCuenta.js"></script>
        
<?php require("partials/footer.php"); ?>
