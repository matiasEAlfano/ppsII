<?php
    require("models/stock.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "seleccionar";
    $talles = getTalles();
    $productos = getProductos();
    $producto = array();
    $stocks = getStocks();
    $stock = array();
        if($action == "seleccionar"){
        $producto = getProducto($id);
        $action = "guardar";
    }
?>

<?php require("partials/gestionHeader.php"); ?>

<div class="row">                         
    <div class="col-md-4">

        <form id="form-productos-stock" method="post" action="actions/actions-stocks.php" >

            <?php if($id): ?>
                <input id="eligioProducto" type="hidden" name="id" value="<?= $id; ?>"/>                      
            <?php endif; ?>    

            <label for="descripcion-producto">Producto:
                <span class="btn-success">
                    <?=!empty($producto) ? $producto["marca_nombre"] : ""?>
                    <?=!empty($producto) ? $producto["producto_descripcion"] : ""?>
                </span>    
            </label>

           <!-- <label for="descripcion-producto">Producto:
                <input name="productoElegido" id="productoElegido" type="text" disabled>
            </label>-->
            <br>
            <br>

            <label for="talle-producto">Talle</label>
            <br>
            <select name="talle" id="talle-producto" class="dropdown-basico abm-inputs">
                <option> Seleccione un talle </option>
                <?php foreach ($talles as $talle) {
                    $selected = ($producto["id_talle"]==$talle["id_talle"]) ? "selected='selected'" : "";
                ?>
                    <option <?= $selected ?> value="<?= $talle["id_talle"]; ?>">
                        <?= $talle["talle_nombre"]; ?>
                    </option>
                <?php } ?>
            </select>
            <br>

            <label for="stock-cantidad">Cantidad</label>                                  
            <input name="cantidad" value="<?= !empty($stock) ? $stock["cantidad"] : ""?>" id="stock-cantidad" class="texto form-control abm-inputs" placeholder="Cantidad">
            <br>
            <button id="guardarStock" type="submit" class="btn btn-primary" name="action" value="guardar">Guardar</button>
            <!--<input id="guardarStock" type="submit" class="btn btn-primary" name="action" value="guardar"/>-->
            <input id="cancelarStock" type="submit" class="btn btn-danger" name="action" value="Cancelar"/>    

        </form>

    </div>

    <div class="col-md-7">
        <table id="listado-tipos" class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>Imagenes</th>
            <th>Seleccionar</th>
        </tr>
        </thead>
    <tbody>
        <?php foreach($productos as $producto){ ?>
            <tr>
                <td><?= $producto["producto_descripcion"];?></td>
                <td><?= $producto["marca_nombre"];?></td>
                <td><?= $producto["nombre_tipo_producto"];?></td>
                <td><img src="<?= $producto["producto_imagen"];?>" id="tabla-imagen"></td>
                <td>
                <form class="form-inline" action="actions/actions-stocks.php" method="post">
                    
                    <input type="hidden" name="id" value="<?= $producto["id_producto"]; ?>"/>
                    
                    <button type="submit" name="action" value="seleccionar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-ok" aria-hidden="true"></sapan></button>
                    
                </form>
            </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
        
    </div>

</div>

<div class="row">
    <table id="listado-tipos" class="table table-hover abm-tablas">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Talle</th>
                    <th>Cantidad</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
            <tbody>
                <?php foreach($stocks as $stock){ ?>
                    <tr>
                        <td><?= $stock["producto_descripcion"];?></td>
                        <td><?= $stock["marca_nombre"];?></td>
                        <td><?= $stock["talle_nombre"];?></td>
                        <td><?= $stock["cantidad"];?></td>
                        <td>
                        <form class="form-inline" action="actions/actions-stocks.php" method="post">

                            <input type="hidden" name="id" value="<?= $stock["id_stock"]; ?>"/>

                            <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>

                        </form>
                    </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</div>                       
                    

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<!--<script src="js/vendor/bootstrap.min.js"></script>-->

<?php require("partials/gestionFooter.php"); ?>