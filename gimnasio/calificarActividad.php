<?php require("partials/header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Mi Cuenta</h2>            
            
            <div class="container cuerpo-socio">
                
                <div class="col-md-3">
                    
                    <div class="row">
                        
                        <li class="#"><a href="ABMperfiles.php">Mi Perfil</a></li>
                        <li><a href="micarrito.php">Mi Carrito</a></li>
                        <li><a>Resumen de Facturas</a></li>
                        <li><a>Calificar</a></li>
                        <a href="reservas.php"><button type="button" class="btn btn-primary">Reserva de Actividades</button></a>
                        
                    </div>
                    
                </div>
                
                <div class="col-md-9">
                    
                    <label>Calificar Actividades</label>

                    <table class="table table-hover">
                        <thead class="cabecera-tabla">
                            <tr>

                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Actividad</th>
                                <th>Estado</th>
                                <th>Calificar</th>

                            </tr>
                        </thead>

                        <tbody class="cuerpo-tabla">
                            <tr>
                                <td>05/05/2015</td>
                                <td>20:00</td>
                                <td>Localizada</td>
                                <td>Realizado - calificado</td>
                                <td> 
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="collapse" href="#mensaje1" aria-expanded="false" aria-controls="collapseExample" >Ver Comentario</button>    


                                    <div class="pull-right">
                                        <select class="form-control" disabled>
                                          <option>Muy Malo</option>
                                          <option>Malo</option>
                                          <option>Bueno</option>
                                          <option selected>Excelente</option>
                                        </select>
                                    </div>  


                                    <div class="collapse collMensaje" id="mensaje1">
                                            <textarea placeholder="Agregar Comentario" rows="2" cols="5" disabled>Excelente clase y profedor muy buena onda</textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>07/05/2015</td>
                                <td>20:00</td>
                                <td>Localizada</td>
                                <td>Realizado - No calificado</td>
                                <td> 
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="collapse" href="#mensaje2" aria-expanded="false" aria-controls="collapseExample">Agregar Comentario</button>

                                    <div class="pull-right">
                                        <select class="form-control" >
                                          <option>Muy Malo</option>
                                          <option>Malo</option>
                                          <option selected>Bueno</option>
                                          <option>Excelente</option>
                                        </select>
                                    </div> 

                                    <div class="collapse collMensaje" id="mensaje2">
                                            <textarea placeholder="Agregar Comentario" rows="2" cols="5"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11/05/2015</td>
                                <td>20:00</td>
                                <td>Aquagym</td>
                                <td>Realizado - No calificado</td>
                                <td> 
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="collapse" href="#mensaje3" aria-expanded="false" aria-controls="collapseExample">Agregar Comentario</button>

                                    <div class="pull-right">
                                        <select class="form-control" >
                                          <option>Muy Malo</option>
                                          <option>Malo</option>
                                          <option selected>Bueno</option>
                                          <option>Excelente</option>
                                        </select>
                                    </div> 

                                    <div class="collapse collMensaje" id="mensaje3">
                                            <textarea placeholder="Agregar Comentario" rows="2" cols="5"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>14/05/2015</td>
                                <td>20:00</td>
                                <td>Localizada</td>
                                <td>Reservado</td>
                                <td> 
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="collapse" href="#mensaje4" aria-expanded="false" aria-controls="collapseExample" disabled>Agregar Comentario</button>

                                    <div class="pull-right">
                                        <select class="form-control" disabled>
                                          <option>Muy Malo</option>
                                          <option>Malo</option>
                                          <option selected>Bueno</option>
                                          <option>Excelente</option>
                                        </select>
                                    </div> 

                                    <div class="collapse collMensaje" id="mensaje4">
                                            <textarea placeholder="Agregar Comentario" rows="2" cols="5"></textarea>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    

                    
                </div>
                
                
                
            </div>
            
<?php require("partials/footer.php"); ?>
