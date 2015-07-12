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
                    
                    <div class="row" id="panel_usuario">
                        <ul id="option_list">
                            <input type="hidden" class="id_usuario" name="id_usuario" value="<?php echo $_SESSION["usuario"]["id"]; ?>">
                            <li><a class="resumen">Resumen</a></li>
                            <li><a class="datos_usuario">Mis Datos</a></li>
                            <li>
                                <a class="mi_carrito" <?= isset($_SESSION["carrito"])? 'href="micarrito.php"' : 'data-toggle="modal" data-target=".mi-modal"' ?>>Mi Carrito</a>
                            </li>
                            <li><a class="mis_compras">Mis Compras</a></li>
                            <li><a class="mis_reservas">Mis Reservas</a></li>
                            <li><a href="calificarActividad.php">Calificar</a></li>
                            <a href="reservas.php"><button type="button" class="btn btn-primary">Reserva de Actividades</button></a>
                        </ul>
                        
                        <!--MODALS:-->
                        <div class="modal fade mi-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content contenido">
                                    <!--ACA DENTRO CREO POR JQUERY EL CONTENIDO DEL MODAL -->
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                </div>
                
                <div class="col-md-9" id="listar">
                    
                    <!--ACA MUESTRO POR AJAX TODA LA FUNCIONALIDAD DE MI CUENTA-->
                    
                </div>
                
                <!--<div class="col-md-3">
                    
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
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Bodycombat</td>
                                      <td>10/05/2015</td>
                                    </tr>
                                    <tr>
                                      <td>IndoorCycle</td>
                                      <td>12/05/2015</td>
                                    </tr>
                                    <tr>
                                      <td>Localizada</td>
                                      <td>13/05/2015</td>
                                    </tr>
                                    <tr>
                                      <td>Aquagym</td>
                                      <td>17/05/2015</td>
                                    </tr>
                                  </tbody>
                            </table>
                    </div>
                    
                </div>-->
                
            </div>
            
        </div>

    <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/miCuenta.js"></script>
        
<?php require("partials/footer.php"); ?>
