<?php 
    require("partials/header.php");
    require("models/producto.php");
    require("models/datos-usuario.php");
    $du = new DatosUsuario;
    $datos = $du->getDatosPersonales($_SESSION["usuario"]["id"]);
<<<<<<< HEAD
    $datosTarjeta = $du->getDatosTarjeta($_SESSION["tarjeta"]["idtipo-tarjeta"]);
=======
>>>>>>> a87da8f3a0e8f7864b4bb752e214381d9f19e1ec
?>
        
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
                            <?php
                                $total=0;
                                if(!empty ($_SESSION["carrito"])){
                                    foreach($_SESSION["carrito"] as $index => $productos){
                                        //$producto_base =
                                        foreach($productos as $index2 => $producto):
                                            $produc = getProducto($producto["idProducto"]);
                                            $marca = $produc["marca_nombre"];
                                            $descripcion = $produc["producto_descripcion"]." (".$marca.")";
                                            $imagen = $produc["producto_imagen"];  
                                            $subtotal = $produc["producto_precio"] * $producto["cantidad"];
                                            $total += $subtotal;
                            ?>
                            <tr class="item-carrito">
                                <td>
                                    <div class="img-producto center">
                                        <img src="<?php echo $imagen?>" border="0" title="" alt="" />
                                        <?php echo $descripcion?>
                                    </div>
                                </td>  

                               <td>
                                    <div class="img-producto"><?php echo $producto["cantidad"]?></div>
                                </td>                             

                                <td>
                                    <div class="detalle-producto">$<?php echo $produc["producto_precio"]?></div>    
                                </td>
                                <td>
                                    $<?php echo $subtotal?>    
                                </td>    
                            </tr>
                            <?php endforeach; ?>
                            <?php } ?>
                            <?php } ?>
                            <tr>
                                <td colspan="3">
                                    <span class="pull-right"><b>Total</b></span>
                                </td>
                                <td>
                                    <span>$<?php echo $total?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>                    
                    
                </div>
                
                <div class="col-md-6 pagos">
                
                    <div class="row">
<<<<<<< HEAD
                        <h2>Datos del comprador:</h2>
=======
                        <h2>Facturar A:</h2>
>>>>>>> a87da8f3a0e8f7864b4bb752e214381d9f19e1ec
                        
                        <h3>Nombre: <b><?php echo $datos["datos_usuario_nombre"]?></b></h3>
                        <h3>Apellido: <b><?php echo $datos["datos_usuario_apellido"]?></b></h3>
                        <h3>Dni: <b><?php echo $datos["datos_usuario_dni"]?></b></h3>
                        
<<<<<<< HEAD
                        <h2>Forma de pago:</h2>
                        
                        <h3>Tarjeta: <b><?php echo $datosTarjeta["tarjetas_tipo"]?></b></h3>
=======
                        <h2>Forma de Pago:</h2>
                        
                        <h3>Tarjeta: <b><?php echo $_SESSION["tarjeta"]["idtipo-tarjeta"]?></b></h3>
>>>>>>> a87da8f3a0e8f7864b4bb752e214381d9f19e1ec
                        <h3>Numero: <b><?php echo $_SESSION["tarjeta"]["numero-tarjeta"]?></b></h3>
                    </div>
                    
                    <a href="comprar2.php">
                        <button type="button" class="btn btn-default">Volver</button>
                    </a>
<<<<<<< HEAD
                    <form method="post" action="actions/api-realizar-compra.php">
                        <button name="action" value="comprar" type="submit" class="btn btn-default" >Confirmar compra</button>
                    </form>
                    
                    <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Confirmar compra</button>-->
                    
=======
                    
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Confirmar compra</button>
                    
>>>>>>> a87da8f3a0e8f7864b4bb752e214381d9f19e1ec
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
        
<?php require("partials/footer.php"); ?>
