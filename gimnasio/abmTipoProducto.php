<?php require("partials/gestionHeader.php"); ?>

<?php
    require("models/productoTipo.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    
    $tipos = getTipos();
    $tipo = array();
    if($action == "actualizar"){
        $tipo = getTipo($id);
    }
?>
<form method="post" action="actions/actions_tipos_productos.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id_tipo" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Nombre tipo de producto: </label>
    <input name = "nombre_tipo" type="text" class="form-control abm-inputs" id="nombre_tipo" value="<?= !empty($tipo) ? $tipo["nombre_tipo_producto"] : ""?>" placeholder="Ingrese tipo de producto">
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>
    
</form>

<table class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Tipo de producto: </th>
            <th>Modificar / Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($tipos as $tipo) {?>
    <tr>
        <td class="acti-tipoDescripcion"><?= $tipo["nombre_tipo_producto"];?></td>
        
        <td>
            <form class="form-inline" action="actions/actions_tipos_productos.php" method="post">
                
                <input type="hidden" name="id" value="<?= $tipo["id_tipo_producto"]; ?>"/>
                
                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                
            </form>
        </td>
    </tr>
    <?php } ?>                          
    </tbody>
</table>

<?php require("partials/gestionFooter.php"); ?>
