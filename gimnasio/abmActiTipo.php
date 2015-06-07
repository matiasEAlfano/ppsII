<?php
    require("models/actiTipo.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    $tipo = array();
    if($action == "actualizar"){
        $c = new ActividadTipo();
        $tipo = $c->get($id);
    }
?>

<?php require("partials/gestionHeader.php"); ?>

<form method="post" action="actions/actions-actividad-tipo.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Tipo de Actividad:</label>
    <input name="descripcion" type="text" class="form-control abm-inputs" id="tipo-actividad" value="<?= !empty($tipo) ? $tipo["descripcion"] : ""?>" placeholder="Tipo">
    
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    
</form>

<table id="listado-tipos" class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Modificar / Eliminar</th>
        </tr>
        </thead>
    <tbody>
                                  
    </tbody>
</table>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<!--<script src="js/vendor/bootstrap.min.js"></script>-->
<script src="js/listado.js"></script>

<?php require("partials/gestionFooter.php"); ?>