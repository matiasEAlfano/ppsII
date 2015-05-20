<?php require("header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Mi Carrito</h2>            
            
            <div class="container cuerpo-micarrito">
                    
                <div class="bs-example" data-example-id="hoverable-table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precion Unitario</th>
                                <th>Sub-Total</th>
                            </tr>
                        </thead>

                        <tbody id="body-micarrito">
                            <tr class="item-carrito">
                                <td>
                                    <div class="img-producto">
                                        <img src="img/remera-nike.jpg">
                                    </div>
                                    <div class="detalle-producto">Remera Tecnica Nike</div>
                                    <div class="edit-producto"><a href="#">Eliminar</a></div>                                    
                                </td>
                                <td>
                                    <select>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>                                
                                </td>
                                <td>$539</td>
                                <td>$539</td>
                            </tr>
                            <tr class="item-carrito">
                                <td>
                                    <div class="img-producto">
                                        <img src="img/zapa_puma.jpg">
                                    </div>
                                    <div class="detalle-producto">Zapatilla Puma</div>
                                    <div class="edit-producto"><a href="#">Eliminar</a></div>                                    
                                </td>
                                <td>
                                    <select>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>                                
                                </td>
                                <td>$700</td>
                                <td>$700</td>
                            </tr>
                            <tr class="item-carrito">
                                <td>
                                    <div class="img-producto">
                                        <img src="img/mochila-topper.jpg">
                                    </div>
                                    <div class="detalle-producto">Mochila Topper</div>
                                    <div class="edit-producto"><a href="#">Eliminar</a></div>                                    
                                </td>
                                <td>
                                    <select>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>                                
                                </td>
                                <td>$1790</td>
                                <td>$1790</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <span class="pull-right"><b>Total</b></span>
                                </td>
                                <td>
                                    <span>$3029</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="row comprar">
                        <a href="comprar.php"><button class="btn btn-default" type="button">COMPRAR</button></a>
                    </div>

                </div>
                
            </div>

        </div>
        
<?php require("footer.php"); ?>
