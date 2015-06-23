<?php 
    require("partials/header.php"); 
    if($_POST){
        // enviar datos al modelo
    }

?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Comprar</h2>            
            
            <div class="container cuerpo-comprar">
                <!--
                <div class="col-md-6 retiro">
                    
                    <h3>Retirar por:</h3>
                    
                    <label>Sede:</label>
                        <select class="form-control">
                            <option value="1">Pilar</option>
                            <option value="2">Microcentro</option>
                            <option value="3">Martinez</option>
                            <option value="4">Palermo</option>
                            <option value="5">Belgrano</option>
                        </select>
                    
                </div>
                -->
                <div class="col-md-12 pagos">
                    <form method="post" action="">
                        <h3>Forma de Pago:</h3>
                        
                        <label>Tipo de tarjeta:</label>
                        <select>
                            <option></option>
                            <option>Visa</option>
                            <option>MasterCard</option>
                            <option>American Express</option>
                        </select>

                        <br>
                        <label>Numero de tarjeta:</label>
                        <input type="text" class="texto form-control" placeholder="ingrese los 16 digitos del frente">

                        <label>Fecha de expiracion:</label>
                        <select>
                            <option>01 - Enereo</option>
                            <option>02 - Febrero</option>
                            <option>03 - Marzo</option>
                            <option>04 - Abril</option>
                            <option>05 - Mayo</option>
                            <option>06 - Junio</option>
                            <option>07 - Julio</option>
                            <option>08 - Agosto</option>
                            <option>09 - Septiembre</option>
                            <option>10 - Octubre</option>
                            <option>11 - Noviembre</option>
                            <option>12 - Diciembre</option>
                        </select>
                        <label>/</label>
                        <select>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                        </select>

                        <br>
                        <label>CCV</label>
                        <input type="text" class="texto form-control">
                    
                       <button type="submit" class="btn btn-default">Revisar Orden</button>
                              
                    </form>  
                </div>
                
            </div>
            
        </div>
        
<?php require("partials/footer.php"); ?>
