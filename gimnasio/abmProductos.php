<?php
    require("models/producto.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    $categorias = getCategorias();
    $generos = getGeneros();
    $tipos = getTipos();
    $marcas = getMarcas();
    $productos = getProductos();
    $producto = array();
    if($action == "actualizar"){
        $producto = getProducto($id);
    }
?>

<?php require("partials/gestionHeader.php"); ?>

<div class="row">
                    <div class="col-md-5">
                        
                        <div class="agrupador_fotos_productos">                        
                        
                        <div class="row fotos_productos_alineados">

                            <div class="imagenes_productos_abm">
                                <img src="img/remera-nike.jpg" alt="Bronce" class="imagenes_alta_producto" >
                            </div>                        
                            
                            <div class="imagenes_productos_abm">
                                <img src="img/remera-nike.jpg" alt="Oro" class="imagenes_alta_producto">              
                            </div>                        
                        </div>
                            <div class="row">
                                
                                <input type="file" title="Agregar foto" data-filename-placement="inside">
                            
                            </div>
                    </div>
                    </div>
                         
                         
                         
                    <div class="col-md-7 atributos_productos ">
                        
                    <form method="post" action="actions/actions-producto.php" id="form-productos">
                            
                        <?php if($id): ?>
                            <input type="hidden" name="id" value="<?= $id; ?>"/>                      
                        <?php endif; ?>    
                        
                        <label for="descripcion-producto"> Descripcion</label>                             
                        <input name="descripcion" value="<?= !empty($producto) ? $producto["producto_descripcion"] : ""?>" id="descripcion-producto" type="text" class="texto form-control abm-inputs" placeholder="Descripcion *" >
                        
                        <label for="precio-producto">Precio</label>                                    
                        <input name="precio" value="<?= !empty($producto) ? $producto["producto_precio"] : ""?>" id="precio-producto" type="text" class="texto form-control abm-inputs" placeholder="Precio" >
                        
                        <label for="marca-producto"> Marca </label>
                        <br>
                        <select name="marca" id="marca-producto" class="dropdown-basico abm-inputs">
                            <option> Seleccione una marca </option>
                            <?php foreach ($marcas as $marca) {?>
                            <option value="<?= $marca["id_marca"]; ?>">
                                <?= $marca["marca_nombre"]; ?>
                            </option>
                            <?php } ?>                            
                        </select>
                        <br>
                        <label for="categoria-producto"> Categoria </label>
                        <br>
                        <select name = "categoria" id="categoria-producto" class="dropdown-basico abm-inputs">
                            <option> Seleccione una categoria </option>
                            <?php foreach ($categorias as $categoria) {?>
                            <option value="<?= $categoria["id_categoria"]; ?>">
                                <?= $categoria["categoria_nombre"]; ?>
                            </option>
                            <?php } ?>
                        </select>
                        <br>
                        
                        <label for="tipo-producto"> Tipo de Producto </label>
                        <br>
                        <select name = "tipo" id="tipo-producto" class="dropdown-basico abm-inputs">
                            <option> Seleccione un tipo </option>
                            <?php foreach ($tipos as $tipo) {?>
                            <option value="<?= $tipo["id_tipo_producto"]; ?>">
                                <?= $tipo["nombre_tipo_producto"]; ?>
                            </option>
                            <?php } ?>
                        </select>
                        <br>
                        
                        <label for="genero-producto"> Genero </label>
                        <br>
                        <select name = "genero" id="genero-producto" class="dropdown-basico abm-inputs">
                            <option> Seleccione un genero </option>
                            <?php foreach ($generos as $genero) {?>
                            <option value="<?= $genero["id_genero"]; ?>">
                                <?= $genero["genero_nombre"]; ?>
                            </option>
                            <?php } ?>
                        </select>
                        <br>
                        
                    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
                    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>    
                        
                       </form>
                        
                </div>
</div>
<div class="row">
                        
<table id="listado-tipos" class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Tipo</th>
            <th>Genero</th>
            <th>Imagenes</th>
            <th>Modificar / Eliminar</th>
        </tr>
        </thead>
    <tbody>
        <?php foreach($productos as $producto){ ?>
            <tr>
                <td><?= $producto["producto_descripcion"];?></td>
                <td><?= $producto["marca_nombre"];?></td>
                <td><?= $producto["producto_precio"];?></td>
                <td><?= $producto["categoria_nombre"];?></td>
                <td><?= $producto["nombre_tipo_producto"];?></td>
                <td><?= $producto["genero_nombre"];?></td>
                <td><?= $producto["producto_imagen"];?></td>
                <td>
                <form class="form-inline" action="actions/actions-producto.php" method="post">
                    
                    <input type="hidden" name="id" value="<?= $producto["id_producto"]; ?>"/>
                    
                    <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
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