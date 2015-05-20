<?php require("header.php"); ?>
        
        <div class="container-fluid cuerpo" style="height:79%%;">
            
            <h2 class="titulo-cuerpo">Acreditacion de Pagos</h2>            
            
            <div class="container cuerpo-planes">
                
<!--                ACA VA TODO EL CODIGO!!-->

            <form>
                <div class="form-group padTop">
                    <label >Usuario</label>
                    <input class="form-control" >
                </div>
                <div class="form-group">
                    <label>Monto</label>
                    <input  class="form-control" >
                </div>
                <div class="form-group">
                    <label >Medio de Pago</label>
                    <select  class="texto form-control">
                       <option value="0">Seleccionar...</option>
                        <optgroup label="Debito">
                            <option value="1">MasterCard</option>
                            <option value="2">Visa</option>
                            <option value="2">American Express</option>
                            <option value="2">Cabal</option>
                            <option value="2">Industrial</option>
                        </optgroup>
                        <optgroup Label="Otro medios...">
                            <option value="2">Efectivo</option>
                        </optgroup>

                            
                    </select>                    
                </div>

                <div class="form-group">
                    <label>Mensaje</label>
                    <textarea class="form-control" placeholder="Mensaje" row="10" ></textarea>
                </div>
                
                <button type="submit" class="btn btn-success pull-right margenesDerecho">Acreditar</button>
            </form>
                
                
            </div>
            
        </div>
        
<?php require("footer.php"); ?>
