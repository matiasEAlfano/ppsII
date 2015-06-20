<?php
    require("models/actividadTipo.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    $tipos = getTipos();
    $tipo = array();
    if($action == "actualizar"){
        $tipo = getTipo($id);
    }
?>

<?php require("partials/gestionHeader.php"); ?>

<form name="form-actividad-tipo" id ="form-actividad-tipo" method="post" action="actions/actions-actividad-tipo.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Tipo de Actividad:</label>
    <input name="descripcion" type="text" class="form-control abm-inputs" id="tipo-actividad" value="<?= !empty($tipo) ? $tipo["descripcion"] : ""?>" placeholder="Tipo">
    
    <br>
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>
    
</form>

<table class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Modificar / Eliminar</th>
        </tr>
        </thead>
    <tbody>
        <?php foreach($tipos as $tipo) : ?>
        <tr>
            <td class="acti-tipoDescripcion"><?= $tipo["descripcion"];?></td>
            <td>
                <form class="form-inline" action="actions/actions-actividad-tipo.php" method="post">
                    
                    <input type="hidden" name="id" value="<?= $tipo["id"]; ?>"/>
                    
                    <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
                    <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                    
                </form>
            </td>
        </tr>
        <?php endforeach; ?>                          
    </tbody>
</table>

<?php require("partials/gestionFooter.php"); ?>

                    
                   
    
    


