<?php require("header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Reserva de Actividades</h2>            
            
            <div class="container cuerpo-reservas">
                
                <div class="row menu-reservas">
                    
                    <div class="col-md-3 col-actividad">
                        <label>Actividad:</label>
                        <select  class="form-control">
                            <option>- Todas -</option>
                            <option value="1" selected="true">IndoorCycle</option>
                            <option value="2">BodyCombat</option>
                            <option value="3">Localizada</option>
                            <option value="4">Yoga</option>
                            <option value="5">Aquiagym</option>
                        </select>
                    </div>
                    
                    <div class="col-md-3 col-sede">
                        <label>Sede:</label>
                        <select class="form-control">
                            <option>- Todas -</option>
                            <option value="1">Pilar</option>
                            <option value="2" selected="true">Microcentro</option>
                            <option value="3">Martinez</option>
                            <option value="4">Palermo</option>
                            <option value="5">Belgrano</option>
                        </select>
                    </div>
                    
                    <div class="col-md-3 col-dia">
                        <label>Día: </label>
                        <input type="date" class="form-control">
                    </div>
                    
                    <div class="col-md-3 col-horario">
                        <button class="btn btn-primary" type="button">Buscar</button>
                    </div>
                    
                </div>
                
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
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Microcentro</td>
                                <td>Martes</td>
                                <td>10:00AM</td>
                                <td>24</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align" data-toggle="modal" data-target=".bs-example-modal-sm">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
</button></td>
                                <td></td>
                            </tr>
                            <tr>
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
                            </tr>
                        
                        </tbody>
                    
                    </table>
                
                </div>                
                
            </div>
            
        </div>
        
<?php require("footer.php"); ?>
