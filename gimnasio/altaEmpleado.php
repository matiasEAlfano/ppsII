<?php require("partials/header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Registro Empleado</h2>            
            
            <div class="container cuerpo-planes">
                
<!--                ACA VA TODO EL CODIGO!!-->
                <div class="row cuerpo-registro">    
                    <div class="col-md-6 ">
                        <img id="gym" src="img/gimnasio-hotel-elimar.jpg" alt="Registro" class="lGym img-responsive"/>
                        
                    </div>
                    <div class="col-md-6 ">
                        <input type="text" class="texto form-control" placeholder="Nombre *" >
                        <input type="text" class="texto form-control" placeholder="DNI *" >
                        <input type="text" class="texto form-control" placeholder="e-mail *" >
                        <input type="text" class="texto form-control" placeholder="Telefono " >
                        <input type="text" class="texto form-control" placeholder="Direccion " >
                        <input type="text" class="texto form-control" placeholder="Codigo Postal " >  
                        <select  class="texto form-control">
                            <option value="0">Seleccionar Perfil</option>
                            <option value="1">Profesor</option>
                            <option value="2">Recepsion</option>
                            <option value="3">Administrador</option>
                            <option value="4">Atencion al cliente</option>
                        </select>       

                        
                        <input class="pull-right" type="button" value="Enviar">
                    </div>
                </div>
                
                
            </div>
            
        </div>
        
<?php require("partials/footer.php"); ?>

