
                    <div class="col-md-5">
                        <div>
                            <h3>Fotos</h3>
                        </div>
                        
                        <div class="agrupador_fotos_productos">                        
                        
                        <div class="row fotos_productos_alineados">

                            <div class="imagenes_productos_abm">
                                <img src="img/remera-nike.jpg" alt="Bronce" class="imagenes_alta_producto" >
                            </div>                        
                            
                            <div class="imagenes_productos_abm">
                                <img src="img/remera-nike.jpg" alt="Oro" class="imagenes_alta_producto">              
                            </div>                        
                        </div>
                            <div class="row boton_agregar_foto">
                            
                                  <button type="button" class="btn btn-default"> Agregar foto </button>                       
                            </div>
                    </div>
                    </div>
                         
                         
                         
                    <div class="col-md-7 atributos_productos ">
                        
                        <label for="descripcion-producto"> Descripcion</label>                                    
                        <input id="descripcion-producto" type="text" class="texto form-control" placeholder="Descripcion *" >
                        
                        <label for="marca-producto"> Marca </label>
                        <br>
                        <select id="marca-producto" class="dropdown-basico">
                            <option> Seleccione una marca </option>
                            <option> Adidas </option>
                            <option> Nike </option>
                            <option> Puma </option>
                            <option> All Star </option>
                            <option> Topper </option>
                        </select>
                        <br>
                        <label for="categoria-producto"> Categoria </label>
                        <br>
                        <select id="categoria-producto" class="dropdown-basico">
                            <option> Seleccione una categoria </option>
                            <option> Calzado </option>
                            <option> Indumentaria </option>
                            <option> Accesorios </option>
                        </select>
                        <br>
                        
                        <label for="tipo-producto"> Tipo de Producto </label>
                        <br>
                        <select id="tipo-producto" class="dropdown-basico">
                            <option> Seleccione un tipo </option>
                            <option> Buzos </option>
                            <option> Camperas </option>
                            <option> Remeras </option>
                        </select>
                        <br>
                        
                        <label for="genero-producto"> Genero </label>
                        <br>
                        <select id="genero-producto" class="dropdown-basico">
                            <option> Seleccione un genero </option>
                            <option> Hombre </option>
                            <option> Mujer </option>
                            <option> Niños </option>
                        </select>
                        <br>
                        
                        <label for="talle-producto"> Talle </label>
                        <br>
                        <select id="talle-producto" class="dropdown-basico">
                            <option> Seleccione un talle </option>
                            <option> XXS </option>
                            <option> XS </option>
                            <option> S </option>
                            <option> M </option>
                            <option> L </option>
                            <option> XL </option>
                            <option> XXL </option>
                        </select>
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

