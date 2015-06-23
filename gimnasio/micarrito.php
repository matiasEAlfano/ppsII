<?php 
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
                                $total = 0;
                                if(!empty ($_SESSION)){
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
                                <td>
                                    <div class="edit-producto"><a onclick="removeCarrito('<?php echo $producto["idProducto"]?>');" >Eliminar</a></div>                                                                          
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
                    
                    <div class="row comprar">
                        
                        <?php if(!$total==0){ ?>
                            <?php if(empty($_SESSION["usuario"])) {?>

                                <a data-toggle="modal" data-target=".iniciar-sesion"><button id="btn-comprar-no-user" name="btn-comprar-no-user" class="btn btn-success" type="button">COMPRAR</button></a>

                            <?php }else{ ?>

                                <a  href="comprar.php"><button class="btn btn-success" type="button">COMPRAR</button></a>

                            <?php } ?>
                        <?php }else{ ?>
                            <a><button id="btn-comprar-no-product" name="btn-comprar-no-product" class="btn btn-success">COMPRAR</button></a>
                        <?php } ?>
                        
                        <a href="e-shop.php">
                            <button class="btn btn-default">Volver al e-Shop</button>
                        </a>
                        
                    </div>

                </div>
                
            </div>

        </div>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<!--<script src="js/vendor/bootstrap.min.js"></script>-->
<script src="js/funcionesGenericas.js"></script>
        
<?php require("partials/footer.php"); ?>
