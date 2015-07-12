<?php require("partials/header.php"); 
/*require("models/calendario.php");*/
/*$c = new Calendario();*/

if($_POST){
    /*$calendarios = $c->getCalendarios($_POST);*/   
}

?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Reserva de Actividades</h2>            
            
            <div class="container cuerpo-reservas">
                
                
                    
                <div class="row menu-reservas">
                        
                    <form id="form-buscar">

                        <div class="col-md-3 col-actividad">
                            <label>Actividad:</label>
                            <select id="cboActividad" name="actividad" class="form-control combo">
                                
                            </select>
                        </div>

                        <div class="col-md-3 col-profesor">                        
                            <label>Profesor:</label>
                            <select id="cboProfesor" name="profesor" class="form-control combo">
                                                           
                            </select>
                        </div>

                        <div class="col-md-3 col-dia">
                            <label>Dia:</label>
                            <select id="cboDia" name="dia" class="form-control combo">
                                
                            </select>
                        </div>

                        <div class="col-md-3 col-fecha">
                            <label>Fecha: </label>
                            <input type="fecha" class="form-control">
                        </div>

                        <div class="col-md-3 col-buscar">
                            <button id="btnBuscar" class="btn btn-primary" type="submit">Buscar</button>
                        </div>
                        
                    </form>
                    
                    <div class="col-md-3">
                        <a href="reservas.php"><button id="btnCancelar" type="button" class="btn btn-danger">Cancelar</button></a>
                    </div>
                </div>
                    
                
                
                <div class="row calendarios">
                    <table id="calendario" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Actividad</th>
                                <th>Profesor</th>
                                <th>Dia</th>
                                <th>Horario</th>
                                <th>Cupos Disponibles</th>
                                <th>Reservar</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            <!--ACA SE CONSTRUYE POR AJAX EL CUERPO DEL CALENDARIO-->
                            <!--EL SIGUIENTE DIV ES EL MODAL DE CONFIRMACION:-->
                            <div id="modal" class="modal fade confirmar-reserva" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                        <div class="modal-content contenido">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                                                <h4 class="modal-title">Confirmar Reserva?</h4>
                                            </div>
                                            <div class="modal-body reserva">
                                                <!--Actividad: <label>IndoorCycle</label><br>
                                                Sede: <label>Microcentro</label><br>
                                                Día: <label>12/05/2015</label><br>
                                                Horario: <label>21:00PM</label>-->
                                            </div>
                                            <div class="modal-footer">
                                                <button id="confirmar" type="button" class="btn btn-success left" data-dismiss="modal" data-toggle="modal" data-target=".reservaExito">Confirmar</button>
                                                <button type="button" class="btn btn-danger left" data-dismiss="modal">Cancelar</button>
                                            </div>
                                        </div>
                                  </div>
                            </div>
                            
                            <div class="modal fade reservaExito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content contenido">
                                        <div class="modal-body">
                                            <h4 class="modal-title">Reserva Exitosa!</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    
                    </table>
                
                </div>                
                
            </div>
            
        </div>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/reservas.js"></script>

        
<?php require("partials/footer.php"); ?>
