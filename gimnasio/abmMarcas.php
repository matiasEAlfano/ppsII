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
<form method="post" action="actions/actions_marcas.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id_marca" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Nombre de Marca: </label>
    <input name = "nombre_marca" type="text" class="form-control abm-inputs" id="marca_nombre" value="<?= !empty($marca) ? $marca["marca_nombre"] : ""?>" placeholder="Ingrese marca">
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    
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
                   






<!--
php require("partials/header.php"); ?>
        
            
            <h2 class="titulo-cuerpo">MARCAS</h2>            
            
            <div class="container cuerpo-abmActividades">
                ACA VA TODO EL CODIGO!!
                
                <div class="col-md-7 col-img">
                    <img src="img/marcaDep.jpg" alt="fondo">
                </div>

                <div class="col-md-5 col-formulario">
                    
                    <form>
                        
                        <div class="form-group">
                            <label for="nombre-actividad">Nombre</label>
                            <input id="nombre-actividad" type="text" class="form-control" placeholder="Marca">
                        </div>               
                            
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#marca-agregada">Guardar</button>
                        <button id="btnCerrar" type="close" class="btn btn-default">Cancelar</button>
                        
                        <div id="marca-agregada" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            
                            <div class="modal-dialog modal-sm">
                                
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                                        <h4 class="modal-title">Marca agregada con exito!</h4>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                            
                    </form>
                        
                </div>
                
            </div>
            
        
php require("partials/footer.php"); ?>
-->
