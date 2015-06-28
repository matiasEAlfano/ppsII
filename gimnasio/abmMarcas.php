<?php require("partials/gestionHeader.php"); ?>

<?php
    require("models/marcas.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    
    $marcas = getMarcas();
    $marca = array();
    if($action == "actualizar"){
        $marca = getMarca($id);
    }
?>
<form id="form-marcas"method="post" action="actions/actions_marcas.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id_marca" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Nombre de Marca: </label>
    <input name = "nombre_marca" type="text" class="form-control abm-inputs" id="marca_nombre" value="<?= !empty($marca) ? $marca["marca_nombre"] : ""?>" placeholder="Ingrese marca">
   
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>
    
</form>

<table class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Marcas: </th>
            <th>Modificar / Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($marcas as $marca) {?>
    <tr>
        <td class="acti-tipoDescripcion"><?= $marca["marca_nombre"];?></td>
        
        <td>
            <form class="form-inline" action="actions/actions_marcas.php" method="post">
                
                <input type="hidden" name="id" value="<?= $marca["id_marca"]; ?>"/>
                
                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                
            </form>
        </td>
    </tr>
    <?php } ?>                          
    </tbody>
</table>

<?php require("partials/gestionFooter.php"); ?>
                   



