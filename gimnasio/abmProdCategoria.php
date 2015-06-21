<?php
    require("models/prodCategoria.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    
    $seccion = empty($id) ? "nueva" : "editar";
    $action = empty($id) ? "guardar" : "actualizar";
    
    $categoria = array();
    if($action == "actualizar"){
        $c = new ProductoCategoria();
        $categoria = $c->getCategoria($id);
    }
?>
<?php require("partials/gestionHeader.php"); ?>

<form id="form-categoria-producto" method="post" action="actions/actions_categorias.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id_categoria" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Nombre de Categoria: </label>
    <input name = "nombre_categoria" type="text" class="form-control abm-inputs" id="categoria_nombre" value="<?= !empty($categoria) ? $categoria["categoria_nombre"] : ""?>" placeholder="Ingrese categoria">
    <br>
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>
    
</form>

<table id="listado-producto-categorias"class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Categorias: </th>
            <th>Modificar / Eliminar</th>
        </tr>
    </thead>
    <tbody>
                          
    </tbody>
</table>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<!--<script src="js/vendor/bootstrap.min.js"></script>-->
<script src="js/categoria-listado.js"></script>

<?php require("partials/gestionFooter.php"); ?>
