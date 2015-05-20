

<?php require("header.php"); ?>
        
            
            <h2 class="titulo-cuerpo">Gestion Administrador</h2>            
            
            <div class="container cuerpo-admin">
<!--                ACA VA TODO EL CODIGO!!-->
                                
                <div class="col-md-2 col-menu-admin">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="#gestiones" data-toggle="pill">Gestiones</a></li>
                        <li role="presentation"><a href="#miscelaneos" data-toggle="pill">Miscelaneos</a></li>
                        <li role="presentation"><a href="#" data-toggle="pill">Lista Negra</a></li>
                        <li role="presentation"><a href="#" data-toggle="pill">Novedades</a></li>
                    </ul>
                </div>
                
                
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
                
                </div>
                
                
            </div>
            
        
<?php require("footer.php"); ?>
