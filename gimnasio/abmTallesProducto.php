<?php require("partials/gestionHeader.php"); ?>

<?php
    require("models/productoTalle.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    
    $talles = getTalles();
    $talle = array();
    if($action == "actualizar"){
        $talle = getTalle($id);
    }
?>
<form id="form-talle-producto" method="post" action="actions/actions_talles.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id_talle" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Nombre del Talle: </label>
    <input name = "nombre_talle" type="text" class="form-control abm-inputs" id="nombre_talle" value="<?= !empty($talle) ? $talle["talle_nombre"] : ""?>" placeholder="Ingrese talle">
    <br>
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>
    
</form>

<table class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Talles: </th>
            <th>Modificar / Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($talles as $talle) {?>
    <tr>
        <td class="acti-tipoDescripcion"><?= $talle["talle_nombre"];?></td>
        
        <td>
            <form class="form-inline" action="actions/actions_talles.php" method="post">
                
                <input type="hidden" name="id" value="<?= $talle["id_talle"]; ?>"/>
                
                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                
            </form>
        </td>
    </tr>
    <?php } ?>                          
    </tbody>
</table>

<?php require("partials/gestionFooter.php"); ?>
