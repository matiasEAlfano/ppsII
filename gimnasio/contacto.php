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
                        
                        <input type="text" class="texto form-control" placeholder="Nro Socio">
                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Seleccionar...">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sede <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="#">Pilar</a></li>
                                    <li><a href="#">Microcentro</a></li>
                                    <li><a href="#">Matinez</a></li>
                                    <li><a href="#">Palermo</a></li>
                                    <li><a href="#">Belgrano</a></li>
                                </ul>
                            </div>
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
