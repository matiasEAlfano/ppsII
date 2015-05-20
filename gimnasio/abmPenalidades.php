<?php require("header.php"); ?>
        
            
            <h2 class="titulo-cuerpo">PENALIDADES</h2>            
            
            <div class="container cuerpo-abmActividades">
<!--                ACA VA TODO EL CODIGO!!-->
                
               

                <div class="col-md-12 col-formulario">
                    
                    <form>
                        
                        <div class="form-group">
                            <label for="nombre-actividad">Causa</label>
                            <input id="nombre-actividad" type="text" class="form-control" placeholder="¿Comó entra?">
                        </div>
                        <div class="form-group">
                            <label for="nombre-actividad">Consecuencia</label>
                            <input id="nombre-actividad" type="text" class="form-control" placeholder="¿Comó sale?">
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
            
        
<?php require("footer.php"); ?>