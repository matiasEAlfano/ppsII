<?php
    require("models/stock.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $productos = getProductosInStock();
?>

<?php require("partials/header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">E-SHOP</h2>            
            
            <div class="container cuerpo-carrito">
                
                <div class="col-md-3 menu-carrito">
                    <ul class="list-unstyled">
                        <li><label>Productos:</label></l>
                        <li><label>Total:</label></l>
                        <li><a class="list-car" href="micarrito.php"><label>Ir a Mi Carrito</label></a></l>
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
                    
                    <ul class="lista-prodcutos list-inline list-unstyled">
                        <?php foreach ($productos as $producto) {?>
                        
                            <li class="item">
                                <img src="<?= $producto["producto_imagen"]; ?>" alt="img">
                                <input class="add-producto" name="id_producto" type="hidden" value="<?= $producto["id_producto"]; ?>">
                                <p>
                                    <b><?= $producto["marca_nombre"]; ?> <?= $producto["producto_descripcion"]; ?></b>
                                    <br>
                                    (<?= $producto["nombre_tipo_producto"]; ?>)
                                </p>
                                
                                <p>
                                    <b class="precio">$<?= $producto["producto_precio"]; ?></b>
                                </p>
                                <input type="hidden" name="precio_<?php echo $producto["id_producto"]?>" id="precio_<?php echo $producto["id_producto"]?>" value="<?= $producto["producto_precio"]; ?>">
                                
                                <select class="add-talle" name="talle_<?php echo $producto["id_producto"]?>" id="talle_<?php echo $producto["id_producto"]?>">
                                    <option value="0"> Talle </option>
                                    <?php foreach ($talles=getTallesPorProducto($producto["id_producto"]) as $talle) {?>
                                        <option value="<?= $talle["id_talle"]; ?>">
                                        <?= $talle["talle_nombre"]; ?>
                                        </option>
                                    <?php } ?>                            
                                </select>
                                
                                <select class="add-cantidad" name="cantidada_<?php echo $producto["id_producto"]?>" id="cantidad_<?php echo $producto["id_producto"]?>">
                                    <option value="0">Cantidad</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>

                                <!--<button id="add-to-car" type="submit" class="btn btn-primary" data-toggle="modal" data-target=".prod-agregado">Agregar</button>-->
                                <button onclick="addCarrito(<?php echo $producto["id_producto"]; ?>);" type="button" class="btn btn-primary add-to-car" >Agregar</button>

                            </li>
                        
                        <?php } ?>
                        
                    </ul>
                        
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

                </div>
                
            </div>
            
        </div>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<!--<script src="js/vendor/bootstrap.min.js"></script>-->
<script src="js/funcionesGenericas.js"></script>
        
<?php require("partials/footer.php"); ?>