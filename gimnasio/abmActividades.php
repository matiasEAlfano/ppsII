                <div class="col-md-5 col-formulario">
                    
                    <form>
                        
                        <div class="form-group">
                            <label for="nombre-actividad">Nombre</label>
                            <input id="nombre-actividad" type="text" class="form-control" placeholder="Actividad">
                        </div>
                        
                        <div class="form-group">
                            <label>Tipo</label>
                            <br>
                            <select class="dropdown-basico">
                                <option>Cardio</option>
                                <option>Acondicionamiento Muscular</option>
                                <option>Postural y Conciente</option>
                                <option>Tecnico</option>
                            </select>                            
                        </div>
                        
                        <div class="form-group">
                            <label>Grupo</label>
                            <br>
                            <select class="dropdown-basico">
                                <option>Acuatica</option>
                                <option>Aerobica</option>
                                <option>Baile</option>
                                <option>Combat</option>
                                <option>Spining</option>
                            </select>
                        </div>
                            
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".actividad-agregada">Guardar</button>
                        <button id="btnCerrar" type="close" class="btn btn-default">Cancelar</button>
                        
                        <div class="modal fade actividad-agregada" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            
                            <div class="modal-dialog modal-sm">
                                
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                                        <h4 class="modal-title">Actividad agregada con exito!</h4>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                            
                    </form>
                        
                </div>

                <div class="col-md-7 col-img">
                    <img class="foto-abmActividades"src="img/actividades-fondo.jpg" alt="fondo">
                    <button type="submit" class="btn btn-primary">Agregar foto</button>
                </div>
