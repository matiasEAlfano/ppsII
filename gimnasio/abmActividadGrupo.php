<?php
    require("models/actividadGrupo.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    $tipos = getTipos();
    $grupos = getGrupos();
    $grupo = array();
    if($action == "actualizar"){
        $grupo = getGrupo($id);
    }
?>

<?php require("partials/gestionHeader.php"); ?>

<form method="post" action="actions/actions-actividad-grupo.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Grupo de Actividad:</label>
    <input name = "descripcion" type="text" class="form-control abm-inputs" id="tipo-actividad" value="<?= !empty($grupo) ? $grupo["descripcion"] : ""?>" placeholder="Grupo">
    
    <label>Tipo:</label>
    <select name = "idTipo" class="form-control abm-inputs">
        
        <option>-Seleccionar Tipo-</option>
        
        <?php foreach($tipos as $tipo) {?>
            <option value= "<?= $tipo["id"];?>"><?= $tipo["descripcion"];?></option>
        <?php } ?>
        
    </select>
    
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>
    
</form>

<table class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Grupo</th>
            <th>Tipo</th>
            <th>Modificar / Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($grupos as $grupo) {?>
    <tr>
        <td class="acti-tipoDescripcion"><?= $grupo["grupo"];?></td>
        <td class="acti-tipoDescripcion"><?= $grupo["tipo"];?></td>
        <td>
            <form class="form-inline" action="actions/actions-actividad-grupo.php" method="post">
                
                <input type="hidden" name="id" value="<?= $grupo["id"]; ?>"/>
                
                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                
            </form>
        </td>
    </tr>
    <?php } ?>                          
    </tbody>
</table>

<?php require("partials/gestionFooter.php"); ?>
                   
    
    


