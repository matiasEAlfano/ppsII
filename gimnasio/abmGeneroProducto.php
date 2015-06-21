<?php require("partials/gestionHeader.php"); ?>

<?php
    require("models/productoGenero.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    
    $generos = getGeneros();
    $genero = array();
    if($action == "actualizar"){
        $genero = getGenero($id);
    }
?>
<form id="form-genero-producto" method="post" action="actions/actions_generos.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id_genero" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Nombre del genero: </label>
    <input name = "nombre_genero" type="text" class="form-control abm-inputs" id="nombre_genero" value="<?= !empty($genero) ? $genero["genero_nombre"] : ""?>" placeholder="Ingrese genero">
    <br>
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>
    
</form>

<table class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Generos: </th>
            <th>Modificar / Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($generos as $genero) {?>
    <tr>
        <td class="acti-tipoDescripcion"><?= $genero["genero_nombre"];?></td>
        
        <td>
            <form class="form-inline" action="actions/actions_generos.php" method="post">
                
                <input type="hidden" name="id" value="<?= $genero["id_genero"]; ?>"/>
                
                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                
            </form>
        </td>
    </tr>
    <?php } ?>                          
    </tbody>
</table>

<?php require("partials/gestionFooter.php"); ?>
