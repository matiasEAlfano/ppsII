<?php require("partials/header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Comprar</h2>            
            
            <div class="container cuerpo-comprar">
                
                <div class="col-md-6 detalle-compra">
                    <h3>Detalle de la compra:</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precion Unitario</th>
                                <th>Sub-Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="item-carrito">
                                <td>
                                    <div class="img-producto">
                                        <img src="img/remera-nike.jpg">
                                    </div>
                                    <div class="detalle-producto">Remera Tecnica Nike</div>
                                </td>
                                <td>
                                    1                              
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
                                </td>
                                <td>
                                    1                              
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
                                </td>
                                <td>
                                    1                               
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
                    
                </div>
                
                <div class="col-md-6 facturacion">
                    
                    <h3>Datos de Facturacion:</h3>
                    
                    <label>Nombre:</label>
                    <input type="text" class="texto form-control" placeholder="nombre socio" >
                    
                    <label>Apellido:</label>
                    <input type="text" class="texto form-control" placeholder="apellido socio">
                    
                    <label>Direccion:</label>
                    <input type="text" class="texto form-control" placeholder="calle, numero, piso, dto, edificio">
                    
                    <label>Codigo Postal:</label>
                    <input type="text" class="texto form-control" placeholder="C.P">
                    
                    <label>Localidad:</label>
                    <input type="text" class="texto form-control" placeholder="localidad">
                    
                    <label>Telefono:</label>
                    <input type="text" class="texto form-control" placeholder="(cod. area) numero">
                    
                    <a href="comprar2.php"><button type="button" class="btn btn-default">Continuar</button></a>
                    
                </div>
                
            </div>
            
        </div>
        
<?php require("partials/footer.php"); ?>
