<?php require("partials/header.php"); 
require("models/actividades.php");
require("models/calendario.php");
$actividades = getActividades();


if($_POST){
$calendarios = getCalendarios($_POST);  
}

?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Reserva de Actividades</h2>            
            
            <div class="container cuerpo-reservas">
                
                <form method="post">
                    
                <div class="row menu-reservas">
                    
                    <div class="col-md-3 col-actividad">
                        <label>Actividad:</label>
                        <select name="actividad" class="form-control">
                            <option>- Todas -</option>
                            <?php foreach($actividades as $actividad){?>
                                
                            <option value="<?php echo $actividad["id"] ?>"> <?php echo $actividad["nombre"] ?></option>
                            
                            
                            <?php }?>
                        </select>
                    </div>
                    
                    <div class="col-md-3 col-sede">
                        <label>Profesor:</label>
                        <select name="profesor" class="form-control">
                            <option>- Todas -</option>
                                 
                                
                            <option value="1">Matias Alfano</option>
                            <option value="2">Roco Duro</option>
                            
                        </select>
                    </div>
                    
                    <div class="col-md-3 col-sede">
                        <label>Dia:</label>
                        <select name="dia" class="form-control">
                            <option>- Todos -</option>
                                 
                            <option value="1">Lunes</option>
                            <option value="2">Martes</option>
                            
                        </select>
                    </div>
                    
                    <div class="col-md-3 col-dia">
                        <label>Fecha: </label>
                        <input type="fecha" class="form-control">
                    </div>
                    
                    <div class="col-md-3 col-horario">
                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </div>
                    
                </div>
                    
                </form>
                
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Actividad</th>
                                <th>Sede</th>
                                <th>Dia</th>
                                <th>Horario</th>
                                <th>Cupos Disponibles</th>
                                <th>Reservar</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach($calendarios as $calendario): ?>
                            
                            <tr>
                                <td><?php echo $calendario["nombre"]?></td>
                                <td>Microcentro</td>
                                <td>Martes</td>
                                <td>10:00AM</td>
                                <td>24</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align" data-toggle="modal" data-target=".bs-example-modal-sm">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
</button></td>
                                <td></td>
                            </tr>
                            
                            <?php endforeach;?>
                            
                           <!-- <tr>
                                <td>IndoorCycle</td>
                                <td>Microcentro</td>
                                <td>Martes</td>
                                <td>15:00PM</td>
                                <td>40</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align" data-toggle="modal" data-target=".bs-example-modal-sm">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
</button></td>
                            </tr>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Microcentro</td>
                                <td>Martes</td>
                                <td>19:00PM</td>
                                <td>0</td>
                                <td><button type="button" class="btn btn-danger" aria-label="Left Align" data-toggle="tooltip" data-placement="right" title="No hay cupos disponibles">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
</button>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Microcentro</td>
                                <td>Martes</td>
                                <td>21:00PM</td>
                                <td>11</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align" data-toggle="modal" data-target=".bs-example-modal-sm">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
</button>
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
                                </td>
                            </tr>-->
                        
                        </tbody>
                    
                    </table>
                
                </div>                
                
            </div>
            
        </div>
        
<?php require("partials/footer.php"); ?>
