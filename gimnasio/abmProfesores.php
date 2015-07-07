   <?php
    require("models/profesores.php");
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    
    $action = empty($id) ? "guardar" : "actualizar";
    $p = new Profesor();
    $profesores = $p->getAll();
    

    if($action == "actualizar"){

        $profesor = $p->get($id);
    }
?>

    <?php require("partials/gestionHeader.php"); ?>

                <div class="col-md-5">

        <form method="post" action="actions/imagenes.php?action=subir" id="uploadForm" enctype="multipart/form-data">
        
            <div class="agrupador_fotos_productos">                        
            
                <div class="row fotos_productos_alineados">

                    <div id="listadoProductos"class="imagenes_productos_abm">
                        
                    </div>                        
                    
                                          
                </div>
                <div class="row upload-imagen">
                    
                    <input id="seleccionarImagen" name="imagen" type="file" value="Seleccionar imagen" />
                    <br/>
                    <input class="btn btn-primary" type="submit" value="Subir" />
                
                </div>
            </div>
        </form>
    </div>
                <div class="col-md-7 col-formulario">
                    
                    <form id ="form_profesores" action="actions/api-profesor.php">
                        
                        <!-- <div class="form-group">
                            <label >Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div> -->
                        
                        <div class="form-group">
                            <label>Nombre y Apellido</label>
                            <input id="nombre" type="text" value="<?= !empty($profesor) ? $profesor["profesor_nombre_apellido"] : ""?>" name="profesor_nombre_apellido" class="form-control abm-inputs" placeholder="Nombre y Aprellido">
                        </div>
                        
                        <div class="form-group">
                            <label>DNI</label>
                            <input id="dni" type="text" value="<?= !empty($profesor) ? $profesor["profesor_dni"] : ""?>" name="profesor_dni" class="form-control abm-inputs" placeholder="Numero">
                        </div>
                        
                        <div class="form-group">
                            <label>Direccion</label>
                            <input id="direccion" type="text" value="<?= !empty($profesor) ? $profesor["profesor_direccion"] : ""?>" name="profesor_direccion" class="form-control abm-inputs" placeholder="Calle, Numero, Dto., Piso.">
                        </div>
                        
                        
                        <div class="form-group">
                            <label>Telefono </label>
                            <input id="telefono" type="text" value="<?= !empty($profesor) ? $profesor["profesor_telefono"] : ""?>" name="profesor_telefono" class="form-control abm-inputs" placeholder="Tel.">
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input id="mail" type="text" value="<?= !empty($profesor) ? $profesor["profesor_mail"] : ""?>" name ="profesor_mail" class="form-control abm-inputs" placeholder="Email">
                        </div>

                        <input id="id" type="hidden" name="id" value="<?= !empty($profesor) ? $profesor["id_profesor"] : ""?>"/>
                        
                            
                        <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
                        <input type="button" class="btn btn-danger" onclick="limpiar()" name="action" value="Cancelar"/>
                        
                        <div class="modal fade actividad-agregada" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            
                            <div class="modal-dialog modal-sm">
                                
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                                        <h4 class="modal-title">Actividad agregada con exito!</h4>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                            
                    </form>
                </div>


                        
                <table class="table table-hover abm-tablas">
                    <thead>
                        <tr>
                            <th>Profesor</th>
                            <th>DNI</th>
                            <th>Modificar/Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach($profesores as $profesor) {?>
                    <tr>
                        <td class="acti-tipoDescripcion"><?= $profesor["profesor_nombre_apellido"];?></td>
                        <td class="acti-tipoDescripcion"><?= $profesor["profesor_dni"];?></td>
                        <td>
                            <form class="form-inline" action="actions/api-profesor.php" method="post">
                                
                                <input type="hidden" name="id" value="<?= $profesor["id_profesor"]; ?>"/>
                                
                                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                                    
                                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                                
                            </form>
                        </td>
                    </tr>
                    <?php } ?>                          
                    </tbody>
                </table>

            <script type="text/javascript">
                function limpiar(){
                    /*$("#nombre").val('');
                    $("#dni").val('');
                    $("#direccion").val('');
                    $("#telefono").val('');
                    $("#mail").val('');
                    $("#id").val('');*/

                    window.location.href = "abmProfesores.php?";
                }

            </script>
                
             <!--    <div class="col-md-5 col-img">
                    <img src="img/profesores-fondo.jpg" alt="fondo">                    
                </div> -->

        <?php require("partials/gestionFooter.php"); ?>

