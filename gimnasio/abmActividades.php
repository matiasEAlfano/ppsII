<?php
    require("models/actividades.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    $tipos = getTipos();
    $grupos = getGrupos();
    $actividades = getActividades();
    $actividad = array();
    if($action == "actualizar"){
        $actividad = getActividad($id);
    }
?>

<?php require("partials/gestionHeader.php"); ?>

<form method="post" action="actions/actions-actividades.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Actividad:</label>
    <input name = "nombre" type="text" class="form-control abm-inputs" id="actividad" value="<?= !empty($actividad) ? $actividad["nombre"] : ""?>" placeholder="Actividad">
    
    <label>Tipo:</label>
    <select name = "idTipo" class="form-control abm-inputs">
        
        <option>-Seleccionar Tipo-</option>
        
        <?php foreach($tipos as $tipo) {?>
            <option value= "<?= $tipo["id"];?>"><?= $tipo["descripcion"];?></option>
        <?php } ?>
        
    </select>
    
    <label>Grupo:</label>
    <select name = "idGrupo" class="form-control abm-inputs">
        
        <option>-Seleccionar Grupo-</option>
        
        <?php foreach($grupos as $grupo) {?>
            <option value= "<?= $grupo["id"];?>"><?= $grupo["grupo"];?></option>
        <?php } ?>
        
    </select>
    
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="cancelar"/>
    
</form>

<table class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Actividad</th>
            <th>Tipo</th>
            <th>Grupo</th>
            <th>Modificar / Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($actividades as $actividad) {?>
    <tr>
        <td class="actividad-nombre"><?= $actividad["nombre"];?></td>
        <td class="actividad-tipo"><?= $actividad["tipo"];?></td>
        <td class="actividad-grupo"><?= $actividad["grupo"];?></td>
        <td>
            <form class="form-inline" action="actions/actions-actividades.php" method="post">
                
                <input type="hidden" name="id" value="<?= $actividad["id"]; ?>"/>
                
                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                
            </form>
        </td>
    </tr>
    <?php } ?>                          
    </tbody>
</table>
                        
<?php require("partials/gestionFooter.php"); ?>