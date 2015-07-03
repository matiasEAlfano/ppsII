<?php require("partials/header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">CONTACTO</h2>
            
            <div class="container cuerpo-contacto">
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <img src="img/contacto.jpg" alt="contacto" class="img-thumbnail img-responsive">
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="texto form-control" placeholder="Nombre *" >
                        <input type="text" class="texto form-control" placeholder="Apellido *">
                        <input type="text" class="texto form-control" placeholder="E-mail *">
                        <input type="text" class="texto form-control" placeholder="Telefono">

                        <div class="radios">
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions"> Soy socio!!
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions"> No soy socio :(
                        </label>
                        </div>
                        
                        <textarea placeholder="Mensaje" rows="7" cols="40"></textarea>
                        
                        <div class="btnEnviar">
                            <input type="button" value="Enviar">
                        </div>
                        
                    </div>
                    
                </div>                     
                
            </div>          
            
        </div>
        
<?php require("partials/footer.php"); ?>
