<?php require("partials/header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Reserva de Actividades</h2>            
            
            <div class="container cuerpo-reservas">
                
                <div class="row menu-reservas">
                    <div class="col-md-3 col-actividad">
                        <label>Actividad:</label>
                        <select  class="form-control">
                            <option>- Todas -</option>
                            <option value="1">IndoorCycle</option>
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
                            <option value="2">Microcentro</option>
                            <option value="3">Martinez</option>
                            <option value="4">Palermo</option>
                            <option value="5">Belgrano</option>
                        </select>
                    </div>
                    
                    <div class="col-md-3 col-dia">
                        <label>Día:</label>
                        <input type="date" class="form-control" type="button">
                    </div>
                    
                    <div class="col-md-3 col-buscar">
                        <a href="reservas2.php"><button class="btn btn-primary" type="button">Buscar</button></a>
                    </div>
                    </div>
                    
                </div>
                
                <div class="row">
<!--
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Actividad</th>
                                <th>Sede</th>
                                <th>Dia</th>
                                <th>Horario</th>
                                <th>Reservar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Martinez</td>
                                <td>Lunes</td>
                                <td>10:00AM</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
</button></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Martinez</td>
                                <td>Lunes</td>
                                <td>19:00PM</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
</button></td>
                            </tr>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Belgrano</td>
                                <td>Martes</td>
                                <td>09:30AM</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
</button></td>
                            </tr>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Martinez</td>
                                <td>Lunes</td>
                                <td>10:00AM</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
</button></td>
                            </tr>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Martinez</td>
                                <td>Lunes</td>
                                <td>10:00AM</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
</button></td>
                            </tr>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Martinez</td>
                                <td>Lunes</td>
                                <td>10:00AM</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
</button></td>
                            </tr>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Martinez</td>
                                <td>Lunes</td>
                                <td>10:00AM</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
</button></td>
                            </tr>
                            <tr>
                                <td>IndoorCycle</td>
                                <td>Martinez</td>
                                <td>Lunes</td>
                                <td>10:00AM</td>
                                <td><button type="button" class="btn btn-success" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
</button></td>
                            </tr>
                        
                        </tbody>
                    
                    </table>
-->
                
                </div>                
                
            </div>
            
<?php require("partials/footer.php"); ?>
