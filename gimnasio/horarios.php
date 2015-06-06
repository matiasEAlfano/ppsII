<?php require("partials/header.php"); ?>
        
        <div class="container-fluid cuerpo">
            
            <h2 class="titulo-cuerpo">HORARIOS</h2>
                 
                <div class="container cuerpo-horarios">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="row sedes">
                                <h3>Sedes</h3>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <div class="row horarios">
                                <h3>Buscar Horario</h3>
                            </div>
                            
                            <p class="intro-horarios">Filtrá actividades seleccionando tus intereses y encontrá tus clases favoritas.</p>
                            
                            <div class="row horarios-opciones">
                                
                                <label>Día:</label>
                                <select class="form-control">
                                    <option>- Todos los días -</option>
                                    <option>Lunes</option>
                                    <option>Martes</option>
                                    <option>Miercoles</option>
                                    <option>Jueves</option>
                                    <option>Viernes</option>
                                    <option>Sabado</option>
                                    <option>Domingo</option>
                                </select>
                                
                                <label>Horarios:</label>
                                <select class="form-control">
                                    <option>- Todos los horarios -</option>
                                    <option>Mañana</option>
                                    <option>Mediodia</option>
                                    <option>Tarde</option>
                                    <option>Noche</option>
                                </select>
                                
                                <label>Sede:</label>
                                <select class="form-control">
                                    <option>- Todas las sedes -</option>
                                    <option>Pilar</option>
                                    <option>Microcentro</option>
                                    <option>Martinez</option>
                                    <option>Palermo</option>
                                    <option>Belgrano</option>
                                </select>
                                
                                <label>Actividades:</label>
                                <select class="form-control">
                                    <option>- Todas las Actividades -</option>
                                    <option>Aquagym</option>
                                    <option>Indoor</option>
                                    <option>Stretching</option>
                                    <option>Boxeo</option>
                                </select>
                                
                                <div class="btnEnviar">
                                    <a href="reservas2.php"><input type="button" value="Buscar">     </a>                               
                                </div>    
                                
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        
<?php require("partials/footer.php"); ?>
