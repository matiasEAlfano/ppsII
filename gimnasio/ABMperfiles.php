<?php require("header.php"); ?>
        
        <div class="container cuerpo">
            
            <div class="row titulo">
                <div class="col-md-6 ">
                    <label class="pull-left tipoH2 titulo-nombre">Perfiles</h2>  
                </div>  
                <div class="col-md-6 ">

                    <button  class="btn btn-primary pull-right botonAgregar" ></span> Agregar Perfil</button>
                </div>
                
            </div>
            
            <div class="container cuerpo-perfiles">
                
<!--                ACA VA TODO EL CODIGO!!-->
                <div class="row fila-tabla" >
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead class="cabecera-tabla">
                                <tr >
                                    
                                    <th>Perfil</th>
                                    <th>Cantidad de usuarios</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody class="cuerpo-tabla">
                                
                                <tr>
                                    
                                    <td>Administrador</td>
                                    <td>2</td>
                                    <td>
                                        <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                                    </td>
                                </tr>
                                
                                <tr>
                                    
                                    <td>Profesores</td>
                                    <td>25</td>
                                    <td>
                                        <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                                    </td>
                                </tr>
                        
                                <tr >
                                    
                                    <td>Recepcionistas</td>
                                    <td>5</td>
                                    <td>
                                       <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                                    </td>
                                </tr>
                    
                                <tr>
                                    
                                    <td>Recursos Humanos</td>
                                    <td>10</td>
                                    <td>
                                       <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                                    </td>
                                </tr>
                
                                <tr>
                                    
                                    <td>Socio</td>
                                    <td>0</td>
                                    <td>
                                        <button class="btn btn-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden ></span></button>
                                        <button class="btn btn-primary" ><span class="glyphicon glyphicon glyphicon-pencil"></span></button>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                
                
            </div>
            
        </div>

<?php require("footer.php"); ?>
