                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="#productos" role="tab" data-toggle="tab">Productos</a></li>
                        <li role="presentation"><a href="#actividades" role="tab" data-toggle="tab">Actividades</a></li>
                        <li role="presentation"><a href="#" role="tab" data-toggle="tab">Socios</a></li>
                        <li role="presentation"><a href="#" role="tab" data-toggle="tab">Penalidades</a></li>
                        <li role="presentation"><a href="#profesores" role="tab" data-toggle="tab">Profesores</a></li>
                        <li role="presentation"><a href="#sedes" role="tab" data-toggle="tab">Sedes</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        
                        <div role="tabpanel" class="tab-pane fade" id="profesores">                            
                            <?php require("abmProfesores.php"); ?>                            
                        </div>
                        
                        
                        <div role="tabpanel" class="tab-pane fade" id="sedes">                            
                            <?php require("abmSedes.php"); ?>                            
                        </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="productos">
                            
                            <?php require("abmProductos.php"); ?>
     
                            <div class="row">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Descripcion</th>
                                            <th>Marca</th>
                                            <th>Categoria</th>
                                            <th>Tipo de Producto</th>
                                            <th>Genero</th>
                                            <th>Talle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Zapatilla puma ignite</td>
                                            <td>Puma</td>
                                            <td>Calzado</td>
                                            <td>Running</td>
                                            <td>Hombre</td>
                                            <td>40</td>
                                        </tr>
                                        <tr>
                                            <td>Botines Nike Mercurio</td>
                                            <td>Nike</td>
                                            <td>Calzado</td>
                                            <td>futbol</td>
                                            <td>Hombre</td>
                                            <td>42</td>
                                        </tr>
                                        <tr>
                                            <td>Musculosa dry-fit</td>
                                            <td>Addidas</td>
                                            <td>Indumentaria</td>
                                            <td>Training</td>
                                            <td>Hombre</td>
                                            <td>L</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="actividades">
                            
                            <?php require("abmActividades.php"); ?>
                            
                            <div class="row">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Tipo</th>
                                            <th>Grupo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Aquagym</td>
                                            <td>Cardio</td>
                                            <td>Acuatica</td>
                                        </tr>
                                        <tr>
                                            <td>Aero Local</td>
                                            <td>Acondicionamiento Muscular</td>
                                            <td>Muscular</td>
                                        </tr>
                                        <tr>
                                            <td>Karate</td>
                                            <td>Tecnico</td>
                                            <td>Arte Marcial</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        
                    </div>



