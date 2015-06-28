<?php require("partials/header.php"); ?>

            
            <h2 class="titulo-cuerpo-login">Por favor complete el formulario:</h2>
            
            <div class="container contenedor-recuperar-password">
                
                <div class="row row-contenido">
                    
                   <form id="form-datos-usuario" action="actions/actions-usuarios.php?action=realizarRegistro" method="post">
                        
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" type="text" class="form-control abm-inputs" id="nombre" placeholder="nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input name="apellido" type="text" class="form-control abm-inputs" id="apellido" placeholder="apellido">
                        </div>
                        <div class="form-group">
                            <label for="dni">Dni</label>
                            <input name="dni" type="text" class="form-control abm-inputs" id="dni" placeholder="(ej: 06999999)">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input name="direccion" type="text" class="form-control abm-inputs" id="direccion" placeholder="calle, numero, depto, piso, edificio">
                        </div>
                        <div class="form-group">
                            <label for="cp">Codigo Postal</label>
                            <input name="cp" type="text" class="form-control abm-inputs" id="cp" placeholder="(ej: 1429)">
                        </div>
                        <div class="form-group">
                            <label for="localidad">Localidad</label>
                            <input name="localidad" type="text" class="form-control abm-inputs" id="localidad" placeholder="localidad">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input name="telefono" type="text" class="form-control abm-inputs" id="telefono" placeholder="(ej: 01142014133)">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                       <button type="click" class="btn btn-danger">Cancelar</button>
                    </form>
                
                </div>
                
            </div>
            
<?php require("partials/footer.php"); ?>
