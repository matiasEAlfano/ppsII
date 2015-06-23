<?php 
    require("partials/header.php");
    require("models/producto.php");
    require("models/datos-usuario.php");
    $du = new DatosUsuario;
    $datos = $du->getDatosPersonales($_SESSION["usuario"]["id"]);
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

                        <tbody id="body-micarrito">
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
                
                <div class="col-md-6 facturacion">
                    
                    <h3>Datos de Facturacion:</h3>                    
                    <label>Nombre:</label><?php echo " " . $datos["datos_usuario_nombre"]?>
                    <br>
                    <label>Apellido:</label><?php echo " " . $datos["datos_usuario_apellido"]?>
                    <br>
                    <label>Dni:</label><?php echo " " . $datos["datos_usuario_dni"]?>
                    <br>
                    <label>Direccion:</label><?php echo " " . $datos["datos_usuario_direccion"]?>
                    <br>
                    <label>CP:</label><?php echo " " . $datos["datos_usuario_cp"]?>
                    <br>
                    <label>Localidad:</label><?php echo " " . $datos["datos_usuario_localidad"]?>
                    <br>
                    <label>Telefono:</label><?php echo " " . $datos["datos_usuario_telefono"]?>
                </div>
                    
                <a href="micarrito.php"><button type="button" class="btn btn-default">Volver a Mi Carrito</button></a>
                
                <a href="comprar2.php"><button type="button" class="btn btn-default">Continuar</button></a>
                    
                    
                    
                <!--</div>-->
                
            </div>
            
        </div>
        
<?php require("partials/footer.php"); ?>
