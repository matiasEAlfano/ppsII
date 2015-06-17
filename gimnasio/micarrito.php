<?php 
session_start();
require("partials/header.php"); 
require("models/producto.php"); 


?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Mi Carrito</h2>            
            
            <div class="container cuerpo-micarrito">
                    
                <div class="bs-example" data-example-id="hoverable-table">
                    <table id="detalle-carrito" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precion Unitario</th>
                                <th>Sub-Total</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                    <tbody id="body-micarrito">
                        <?php  
                            foreach($_SESSION["carrito"] as $index => $productos){
                                //$producto_base =
                                foreach($productos as $index2 => $producto):
                                    $produc = getProducto($producto["idProducto"]);
                                    $marca = $produc["marca_nombre"];
                                    $descripcion = $produc["producto_descripcion"]." (".$marca.")";                                           $imagen = $produc["producto_imagen"];  
                                    $subtotal = $produc["producto_precio"] * $producto["cantidad"];
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
                        <td>
                            <div class="edit-producto"><a onclick="removeCarrito('<?php echo $producto["idProducto"]?>');" >Eliminar</a></div>                                                                          
                        </td>
                    </tr>
                                                
                            <?php endforeach; ?>
                        <?php } ?>
                            <!--<tr class="item-carrito">   
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
                            </tr>-->
                        </tbody>
                    </table>
                    
                    <div class="row comprar">
                        <a href="comprar.php"><button class="btn btn-default" type="button">COMPRAR</button></a>
                    </div>

                </div>
                
            </div>

        </div>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<!--<script src="js/vendor/bootstrap.min.js"></script>-->
<script src="js/funcionesGenericas.js"></script>
        
<?php require("partials/footer.php"); ?>
