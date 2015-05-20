<?php require("header.php"); ?>
        
            
            <h2 class="titulo-cuerpo">MARCAS</h2>            
            
            <div class="container cuerpo-abmActividades">
<!--                ACA VA TODO EL CODIGO!!-->
                
                <div class="col-md-7 col-img">
                    <img src="img/marcaDep.jpg" alt="fondo">
                </div>

                <div class="col-md-5 col-formulario">
                    
                    <form>
                        
                        <div class="form-group">
                            <label for="nombre-actividad">Nombre</label>
                            <input id="nombre-actividad" type="text" class="form-control" placeholder="Marca">
                        </div>
                        
                        <div class="form-group">
                            <label>Proveedor</label>
                            <br>
                            <select class="dropdown-basico">
                                <option>Adidas</option>
                                <option>Reebok</option>
                                <option>Nike</option>
                                
                            </select>                            
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
