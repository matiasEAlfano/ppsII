<?php require("partials/header.php"); ?>
        
        <div class="container-fluid cuerpo">

            <h2 class="titulo-cuerpo">Lista Negra</h2>   
            
                    
            
            <div class="container cuerpo-planes">
                
<!--                ACA VA TODO EL CODIGO!!-->
            <table class="table table-hover  ">
                            <thead class="cabecera-tabla">
                                <tr>
                                    <th>Id Usuario</th>
                                    <th>Nombre Usuario</th>
                                    <th>Fecha de Aparicion</th>
                                    <th>Motivo</th>
                                    <th>¿Comó sale?</th>
                                    <th>Accion</th> 

                                </tr>
                            </thead>
                                
                            <tbody class="cuerpo-tabla">
                                <tr>
                                    <td>1654</td>
                                    <td>Pedro Navarro </td>
                                    <td>10/01/2015 </td>
                                    <td>
                                        <select class="dropdown-basico">
                                            <option>Inasistencia a Actividades</option>
                                            <option>Morosidad 1 a 3 meses</option>
                                            <option selected="selected">Morosidad 4 a 6 meses</option>
                                            <option>Morosidad 7 o mas</option>
                                        </select>
                                    </td>
                                    <td>Abonando 35% adicional por mes deudor</td>
                                    <td>
                                        <a href="acreditarPagos.php"><button class="btn btn-danger">Acreditar Pago</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2158</td>
                                    <td> Juan Garcia </td>
                                    <td> 25/05/2015 </td>
                                    <td>                                         
                                        <select class="dropdown-basico">
                                            <option>Inasistencia a Actividades</option>
                                            <option>Morosidad 1 a 3 meses</option>
                                            <option>Morosidad 4 a 6 meses</option>
                                            <option>Morosidad 7 o mas</option>
                                        </select>
                                    </td>
                                    <td>Multa de $300</td>
                                    <td>
                                        <a href="acreditarPagos.php"><button class="btn btn-danger">Acreditar Pago</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3565</td>
                                    <td> Lucila Pedrozo </td>
                                    <td> 07/10/2014 </td>
                                    <td> 
                                        <select class="dropdown-basico">
                                            <option>Inasistencia a Actividades</option>
                                            <option>Morosidad 1 a 3 meses</option>
                                            <option>Morosidad 4 a 6 meses</option>
                                            <option selected="selected">Morosidad 7 o mas</option>
                                        </select>
                                    </td>
                                    <td>Abonando 35% adicional por mes deudor, la casa se reserva el derecho de admision</td>
                                    <td>
                                        <a href="acreditarPagos.php"><button class="btn btn-danger">Acreditar Pago</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6875</td>
                                    <td> Matias Carrizo </td>
                                    <td> 25/04/2015 </td>
                                    <td> 
                                        <select class="dropdown-basico">
                                            <option>Inasistencia a Actividades</option>
                                            <option selected="selected">Morosidad 1 a 3 meses</option>
                                            <option >Morosidad 4 a 6 meses</option>
                                            <option>Morosidad 7 o mas</option>
                                        </select>
                                    </td>
                                    <td>Abonando %20 adicional por mes deudor</td>
                                    <td>
                                        <a href="acreditarPagos.php"><button class="btn btn-danger">Acreditar Pago</button></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                
                
            </div>
            
        </div>
        
<?php require("partials/footer.php"); ?>