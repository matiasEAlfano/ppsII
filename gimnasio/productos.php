<?php
    require('models/producto.php');
    $seccion = "listado";
    $productos = getProductos();
?>

<?php require("partials/header.php"); ?>
        
            
            <h2 class="titulo-cuerpo">Gestion Administrador</h2>            
            
            <div class="container cuerpo-admin">
<!--                ACA VA TODO EL CODIGO!!-->
                                
                <?php require ("partials/gestionMenuLateral.php"); ?>
                
                
                <div class="col-md-10">
                    
                    <div class="tab-content">
                    
                        <div role="tabpanel" class="tab-pane fade" id="gestiones">
                            <?php require("adminGestiones.php"); ?>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="miscelaneos">
                            <?php require("adminMiscelaneos.php"); ?>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="">
                            <label>Chau Mundo!</label>
                        </div>
                        
                        
                    </div>
                
                    <?php require ("abmProductos.php"); ?>
                    
                    <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Descripcion</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Tipo de Producto</th>
                        <th>Genero</th>
                        <th>Talle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($productos as $producto) : ?>
                    <tr>
                        <td class="productoDescripcion"><?= $producto["producto_descripcion"]; ?></td>
                        
                    </tr>
                    <?php endforeach; ?>  
                </tbody>
            </table>
        </div>
                    
                </div>
                
                
                
                
                
                
            </div>
            
        
<?php require("partials/footer.php"); ?>
