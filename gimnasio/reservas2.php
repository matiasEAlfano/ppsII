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
                
                <form id="form-buscar">
                    
                    <div class="row menu-reservas">

                        <div class="col-md-3 col-actividad">
                            <label>Actividad:</label>
                            <select name="actividad" class="form-control">
                                <option value="0">- Todas -</option>
                                
                            </select>
                        </div>

                        <div class="col-md-3 col-profesor">                        
                            <label>Profesor:</label>
                            <select name="profesor" class="form-control">
                                <option value="0">- Todos -</option>
                                                           
                            </select>
                        </div>

                        <div class="col-md-3 col-dia">
                            <label>Dia:</label>
                            <select name="dia" class="form-control">
                                <option value="0">- Todos -</option>                            
                                
                            </select>
                        </div>

                        <div class="col-md-3 col-fecha">
                            <label>Fecha: </label>
                            <input type="fecha" class="form-control">
                        </div>

                        <div class="col-md-3 col-horario">
                            <button id="btnBuscar" class="btn btn-primary" type="submit">Buscar</button>
                        </div>

                    </div>
                    
                </form>
                
                <div class="row calendarios">
                    <table class="table table-bordered">
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
                            <!--ACA SE CONSTRUYE EL CUERPO POR AJAX-->
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                                                <h4 class="modal-title">Reserva exitosa!</h4>
                                            </div>
                                            <div class="modal-body">
                                                Actividad: <label>IndoorCycle</label><br>
                                                Sede: <label>Microcentro</label><br>
                                                Día: <label>12/05/2015</label><br>
                                                Horario: <label>21:00PM</label>                           
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
