                    <div class="col-md-5">
                        
                        <div class="agrupador_fotos_sedes">                        
                        
                        <div class="row fotos_sedes_alineados">

                            <div class="imagenes_sedes_abm">
                                <img src="img/sede_nueva.jpg" alt="Bronce" class="imagenes_alta_sedes" >
                            </div>                                                
                        </div>
                            <div class="row boton_agregar_foto">
                            
                                  <button type="button" class="btn btn-default"> Agregar foto </button>                       
                            </div>
                    </div>
                    </div>
                         
                         
                         
                    <div class="col-md-7 atributos_sedes ">
                        
                        <label for="descripcion-sedes"> Descripcion</label>                                    
                        <input id="descripcion-sedes" type="text" class="texto form-control" placeholder="Descripcion *" >
                        
                        <label for="provincia-sedes"> Provincia </label>
                        <br>
                        <select id="provincia-sedes" class="dropdown-basico">
                            <option> Seleccione una provincia </option>
                            <option> Buenos Aires </option>
                            <option> Santa Fe </option>
                            <option> Cordoba </option>
                            <option> Mendoza </option>
                            <option> Entre Rios </option>
                        </select>
                        <br>
                        <label for="localidad-sedes"> Localidad </label>
                        <br>
                        <select id="localidad-sedes" class="dropdown-basico">
                            <option> Seleccione una localidad </option>
                            <option> CABA </option>
                            <option> Avellaneda </option>
                            <option> Olivos </option>
                        </select>
                        <br>
                        
                        <label for="direccion-sedes"> Direccion </label>
                        <br>
                        <input id="direccion-sedes" type="text" class="texto form-control" placeholder="Calle, Numero." >
                        <br>
                        
                        <label for="telefono-sedes"> Telefono </label>
                        <br>
                        <input id="telefono-sedes" type="text" class="texto form-control" placeholder="Telefono de sede *" >
                        <br>   
                        
                            <div class="modal fade prod-agregado" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                                                <h4 class="modal-title">Producto agregado!</h4>
                                            </div>                                  
                                        </div>
                                  </div>
                            </div>
                        
                        <div class="row">                       
                            
                            <button type="button" class="btn btn-primary btn-lg boton-agregar-producto" data-toggle="modal" data-target=".prod-agregado"> Agregar </button>
                            
                            <button type="button" class="btn btn-danger btn-lg boton-agregar-producto boton-cancelar-producto"> Cancelar </button>
                        
                        </div>
                        
                    </div>
