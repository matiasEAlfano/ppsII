<?php 
    require("partials/header.php");
    require("models/tarjetasCredito.php");
    $tc = new TarjetasCredito();
    $tipos = $tc->getTiposTarjeta();
    if($_POST){
        // enviar datos al modelo
    }
?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">Comprar</h2>            
            
            <div class="container cuerpo-comprar">
               
                <div class="col-md-12 pagos">
                    
                    <form id="form-datos-tarjeta" name="form-datos-tarjeta" method="post" action="actions/api-addTarjeta.php">
                        
                        <h3>Forma de Pago:</h3>
                        
                        <label>Tipo de tarjeta:</label>
                        <select name="tipo_tarjeta">
                            
                            <option <?= empty($_SESSION["tarjeta"])? "Selected" : "" ?> value="0"></option>
                            <?php foreach($tipos as $tipo){ ?>
                                <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["idtipo-tarjeta"]==$tipo["id_tarjetas_tipo"])? "Selected" : "" ?> value="<?= $tipo["id_tarjetas_tipo"]?>">
                                    <?= $tipo["tarjetas_tipo"]; ?>
                                </option>
                            <?php } ?>
                            
                        </select>

                        <br>
                        <label>Numero de tarjeta:</label>
                        <input name="numero_tarjeta" value="<?= !empty($_SESSION["tarjeta"])?$_SESSION["tarjeta"]["numero-tarjeta"] : ""   ?>" type="text" class="form-control abm-inputs" maxlength="16" placeholder="ingrese los 16 digitos del frente">

                        <label>Fecha de expiracion:</label>
                        <select name="mes-expiracion">
                            <option <?= empty($_SESSION["tarjeta"])? "Selected" : "" ?> value="0"></option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==1)? "selected" : "" ?> value="1">01 - Enereo</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==2)? "selected" : "" ?> value="2">02 - Febrero</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==3)? "selected" : "" ?> value="3">03 - Marzo</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==4)? "selected" : "" ?> value="4">04 - Abril</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==5)? "selected" : "" ?> value="5">05 - Mayo</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==6)? "selected" : "" ?> value="6">06 - Junio</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==7)? "selected" : "" ?> value="7">07 - Julio</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==8)? "selected" : "" ?> value="8">08 - Agosto</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==9)? "selected" : "" ?> value="9">09 - Septiembre</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==10)? "selected" : "" ?> value="10">10 - Octubre</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==11)? "selected" : "" ?> value="11">11 - Noviembre</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["mes-expiracion"]==12)? "selected" : "" ?> value="12">12 - Diciembre</option>
                        </select>
                        
                        <label>/</label>
                        
                        <select name="ano-expiracion">
                            <option <?= empty($_SESSION["tarjeta"])? "Selected" : "" ?> value="0"></option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2015)? "Selected" : "" ?> value="2015">2015</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2016)? "Selected" : "" ?> value="2016">2016</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2017)? "Selected" : "" ?> value="2017">2017</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2018)? "Selected" : "" ?> value="2018">2018</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2019)? "Selected" : "" ?> value="2019">2019</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2020)? "Selected" : "" ?> value="2020">2020</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2021)? "Selected" : "" ?> value="2021">2021</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2022)? "Selected" : "" ?> value="2022">2022</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2023)? "Selected" : "" ?> value="2023">2023</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2024)? "Selected" : "" ?> value="2024">2024</option>
                            <option <?= isset($_SESSION["tarjeta"]) && ($_SESSION["tarjeta"]["ano-expiracion"]==2025)? "Selected" : "" ?> value="2025">2025</option>
                        </select>

                        <br>
                        <label>CCV</label>
                        <input name="tarjeta_ccv" value="<?= !empty($_SESSION["tarjeta"])? $_SESSION["tarjeta"]["tarjeta-ccv"] : "" ?>"type="text" class="form-control abm-inputs" maxlength = "5" placeholder="ccv">
                    
                        <a href="comprar.php">
                            <button type="button" class="btn btn-default">Volver</button>
                        </a>
                        
                       <button name="action" value="add" type="submit" class="btn btn-default">Revisar Orden</button>                              
                    </form>
                </div>
                
            </div>
            
        </div>
        
<?php require("partials/footer.php"); ?>
