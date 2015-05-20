<?php require("header.php"); ?>
        
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
                
                <div class="col-md-6 pagos">
                
                    <div class="row">
                        <h3>Retira por Sede: <b>Microcentro</b> </h3>
                    </div>
                    
                    <div class="row">
                        <h3>Tarjeta: <b>Visa</b></h3>
                        <h3>Numero: <b>XXXX-XXXX-XXXX-9090</b></h3>
                    </div>
                    
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Confirmar compra</button>
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                                        <h4 class="modal-title">Su compra fue procesada!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Recibira un email de confirmacion con la fecha y hora en la que podrá pasar a retirar sus productos.</p>                               
                                    </div>                                                  
                                </div>
                          </div>
                    </div>
                    
                </div>
                
            </div>    
            
        </div>
        
<?php require("footer.php"); ?>
