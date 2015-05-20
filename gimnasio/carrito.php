<?php require("header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">CARRITO</h2>            
            
            <div class="container cuerpo-carrito">
                
                <div class="col-md-3 menu-carrito">
                    <ul class="list-unstyled">
                        <li><label>Productos:</label></l>
                        <li><label>Total:</label></l>
                        <li><a href="micarrito.php"><label>Ir a Mi Carrito</label></a></l>
                    </ul>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseCategorias" aria-expanded="false" aria-controls="collapseExample">Categorias</a>

                    <div class="collapse" id="collapseCategorias">

                        <div class="well">

                            <select multiple class="form-control">
                                <option>Indumentaria</option>
                                <option>Calzados</option>
                                <option>Bolsos y Mochilas</option>
                                <option>Accesorios</option>
                                <option>Insumos Varios</option>
                            </select>

                        </div>

                    </div>

                    <br>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseMarcas" aria-expanded="false" aria-controls="collapseExample">Marcas</a>

                    <div class="collapse" id="collapseMarcas">

                        <div class="well">

                            <select multiple class="form-control">
                                <option>Nike</option>
                                <option>Addidas</option>
                                <option>Puma</option>
                                <option>Reebook</option>
                                <option>Topper</option>
                            </select>

                        </div>

                    </div>
                    
                </div>
                
                <div class="col-md-9 productos">
                    
                    <ul class="lista-prodcutos list-unstyled">
                        <li class="item">
                        <img src="img/zapa_puma.jpg" alt="img"><p>zapatilla puma</p>                        

                            <select>
                                <option>Talle</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="38">38</option>
                                <option value="40">40</option>
                            </select>

                            <select>
                                <option>Cantidad</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".prod-agregado">Agregar</button>

                        </li>

                        <li class="item">
                        <img src="img/remera-nike.jpg" alt="img"><p>Remera Tecnica Nike</p>                        

                            <select>
                                <option>Talle</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="38">38</option>
                                <option value="40">40</option>
                            </select>

                            <select>
                                <option>Cantidad</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".prod-agregado">Agregar</button>
        
                        </li>

                        <li class="item">
                            <img src="img/mochila-topper.jpg" alt="img"><p>Mochila Topper</p>                        

                            <select>
                                <option>Talle Unico</option>
                            </select>

                            <select>
                                <option>Cantidad</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".prod-agregado">Agregar</button>

                            <div class="modal fade prod-agregado" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                                                <h4 class="modal-title">Producto agregado al carrito!</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Podrá ver el producto yendo a la opcion "Ir a Mi Carrito".</p>                               
                                            </div>                                                  
                                        </div>
                                  </div>
                            </div>
                        </li>
                    </ul>
<!--
                    <img src="img/zapa_puma.jpg" alt="img"><p>zapatilla puma</p>
                    <img src="img/zapa_puma.jpg" alt="img"><p>zapatilla puma</p>
                    <img src="img/zapa_puma.jpg" alt="img">
                    <img src="img/zapa_puma.jpg" alt="img">
                    <img src="img/zapa_puma.jpg" alt="img">
                    <img src="img/zapa_puma.jpg" alt="img">                            
-->


                </div>
                
            </div>
            
        </div>
        
<?php require("footer.php"); ?>
