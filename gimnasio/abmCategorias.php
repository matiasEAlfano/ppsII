<?php require("partials/gestionHeader.php"); ?>

<?php
    require("models/productoCategoria.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    
    $categorias = getCategorias();
    $categoria = array();
    if($action == "actualizar"){
        $categoria = getCategoria($id);
    }
?>
<form method="post" action="actions/actions_categorias.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id_categoria" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Nombre de Categoria: </label>
    <input name = "nombre_categoria" type="text" class="form-control abm-inputs" id="categoria_nombre" value="<?= !empty($categoria) ? $categoria["categoria_nombre"] : ""?>" placeholder="Ingrese categoria">
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>
    
</form>

<table class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Categorias: </th>
            <th>Modificar / Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($categorias as $categoria) {?>
    <tr>
        <td class="acti-tipoDescripcion"><?= $categoria["categoria_nombre"];?></td>
        
        <td>
            <form class="form-inline" action="actions/actions_categorias.php" method="post">
                
                <input type="hidden" name="id" value="<?= $categoria["id_categoria"]; ?>"/>
                
                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                
            </form>
        </td>
    </tr>
    <?php } ?>                          
    </tbody>
</table>

<?php require("partials/gestionFooter.php"); ?>
