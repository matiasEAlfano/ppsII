<?php require("partials/gestionHeader.php"); ?>

<?php
    require("models/actividades.php");
    /*require("models/profesores.php");*/
    
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    $action = empty($id) ? "guardar" : "actualizar";
    
    $actividades = array();
    $actividades = getActividades();
    
    $profesores = array();
    /*$profesores = getProfesores();*/
?>
<form id="form-calendario"method="post" action="actions/actions_calendario.php">
    
    <?php if($id): ?>
        <input type="hidden" name="id_calendario" value="<?= $id; ?>"/>                      
    <?php endif; ?>
    
    <label>Actividad: </label>
    <select name="calendario-actividad" id="calendario-actividad" class="dropdown-basico abm-inputs">
        <option> Seleccione una actividad </option>
        <?php foreach ($actividades as $actividad) {
            $selected = ($actividad["id"]==$actividad["id"]) ? "selected='selected'" : "";
        ?>
        <option <?php echo $selected?> value="<?= $actividad["id"]; ?>">
            <?= $actividad["nombre"]; ?>
        </option>
        <?php } ?>
    </select>
    <br>
    
    <label>Profesor  : </label>
    <select name="calendario-profesor" id="calendario-profesor" class="dropdown-basico abm-inputs">
        <option> Seleccione un profesor </option>
        <?php foreach ($profesores as $profesor) {
            $selected = ($profesor["id_profesor"]==$profesor["id_profesor"]) ? "selected='selected'" : "";
        ?>
        <option <?php echo $selected?> value="<?= $profesor["id_profesor"]; ?>">
            <?= $profesor["profesor_nombre_apellido"]; ?>
        </option>
        <?php } ?>
    </select>
    <br>
    
    <div class="panel panel-primary panelesPersonalizados">
        <div class="panel-heading">Dias de la semana.</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-2">Lunes <br><input type="checkbox" name="keywords" value="__option__"></div>
                <div class="col-md-2">Martes <br><input type="checkbox" name="keywords" value="__option__"></div>
                <div class="col-md-2">Miercoles <br><input type="checkbox" name="keywords" value="__option__"></div>
                <div class="col-md-2">Jueves <br><input type="checkbox" name="keywords" value="__option__"></div>
                <div class="col-md-2">Viernes <br><input type="checkbox" name="keywords" value="__option__"></div>
                <div class="col-md-2">Sabado <br><input type="checkbox" name="keywords" value="__option__"></div>
            </div>
        </div>
    </div>

    <!--AGRUPADOR LUNES-->
    
     <div class="panel panel-success panelesPersonalizados">
        <div class="panel-heading">Lunes.</div>
        <div class="panel-body">
            
            <label>Horario de actividad: </label>
            <div class="input-group clockpicker soloHorario">
                <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
            <script type="text/javascript">
                $('.clockpicker').clockpicker();
            </script>
            
            <label>Intervalo: </label>
            <div class="row">
                <div class="col-md-4">60 minutos <br><input type="radio" name="keywords" value="60"></div>
                <div class="col-md-4">120 minutos <br><input type="radio" name="keywords" value="120"></div>
                <div class="col-md-4">180 minutos <br><input type="radio" name="keywords" value="180"></div>
            </div>
            <br>
            <label for="cupos-lunes">Cupos: </label>
            <input name = "cupos-lunes" type="text" class="form-control abm-inputs" id="cupos-lunes" placeholder="Ingrese cupos">
    </div>
    </div>
    
    <!--AGRUPADOR MARTES-->
    
    <div class="panel panel-success panelesPersonalizados">
        <div class="panel-heading">Martes.</div>
        <div class="panel-body">
            
            <label>Horario de actividad: </label>
            <div class="input-group clockpicker soloHorario">
                <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
            <script type="text/javascript">
                $('.clockpicker').clockpicker();
            </script>
            
            <label>Intervalo: </label>
            <div class="row">
                <div class="col-md-4">60 minutos <br><input type="radio" name="keywords" value="60"></div>
                <div class="col-md-4">120 minutos <br><input type="radio" name="keywords" value="120"></div>
                <div class="col-md-4">180 minutos <br><input type="radio" name="keywords" value="180"></div>
            </div>
            <br>
            <label for="cupos-martes">Cupos: </label>
            <input name = "cupos-martes" type="text" class="form-control abm-inputs" id="cupos-martes" placeholder="Ingrese cupos">
    </div>
    </div>
    
    <!--AGRUPADOR MIERCOLES-->
    <div class="panel panel-success panelesPersonalizados">
        <div class="panel-heading">Miercoles.</div>
        <div class="panel-body">
            
            <label>Horario de actividad: </label>
            <div class="input-group clockpicker soloHorario">
                <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
            <script type="text/javascript">
                $('.clockpicker').clockpicker();
            </script>
            
            <label>Intervalo: </label>
            <div class="row">
                <div class="col-md-4">60 minutos <br><input type="radio" name="keywords" value="60"></div>
                <div class="col-md-4">120 minutos <br><input type="radio" name="keywords" value="120"></div>
                <div class="col-md-4">180 minutos <br><input type="radio" name="keywords" value="180"></div>
            </div>
            <br>
            <label for="cupos-miercoles">Cupos: </label>
            <input name = "cupos-miercoles" type="text" class="form-control abm-inputs" id="cupos-miercoles" placeholder="Ingrese cupos">
    </div>
    </div>
    
    <!--AGRUPADOR JUEVES-->
    <div class="panel panel-success panelesPersonalizados">
        <div class="panel-heading">Jueves.</div>
        <div class="panel-body">
            
            <label>Horario de actividad: </label>
            <div class="input-group clockpicker soloHorario">
                <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
            <script type="text/javascript">
                $('.clockpicker').clockpicker();
            </script>
            
            <label>Intervalo: </label>
            <div class="row">
                <div class="col-md-4">60 minutos <br><input type="radio" name="keywords" value="60"></div>
                <div class="col-md-4">120 minutos <br><input type="radio" name="keywords" value="120"></div>
                <div class="col-md-4">180 minutos <br><input type="radio" name="keywords" value="180"></div>
            </div>
            <br>
            <label for="cupos-jueves">Cupos: </label>
            <input name = "cupos-jueves" type="text" class="form-control abm-inputs" id="cupos-jueves" placeholder="Ingrese cupos">
    </div>
    </div>
    
    <!--AGRUPADOR VIERNES-->
    <div class="panel panel-success panelesPersonalizados">
        <div class="panel-heading">Viernes.</div>
        <div class="panel-body">
            
            <label>Horario de actividad: </label>
            <div class="input-group clockpicker soloHorario">
                <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
            <script type="text/javascript">
                $('.clockpicker').clockpicker();
            </script>
            
            <label>Intervalo: </label>
            <div class="row">
                <div class="col-md-4">60 minutos <br><input type="radio" name="keywords" value="60"></div>
                <div class="col-md-4">120 minutos <br><input type="radio" name="keywords" value="120"></div>
                <div class="col-md-4">180 minutos <br><input type="radio" name="keywords" value="180"></div>
            </div>
            <br>
            <label for="cupos-viernes">Cupos: </label>
            <input name = "cupos-viernes" type="text" class="form-control abm-inputs" id="cupos-viernes" placeholder="Ingrese cupos">
    </div>
    </div>
    
    <!--AGRUPADOR SABADO-->
    <div class="panel panel-success panelesPersonalizados">
        <div class="panel-heading">Sabado.</div>
        <div class="panel-body">
            
            <label>Horario de actividad: </label>
            <div class="input-group clockpicker soloHorario">
                <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
            </div>
            <script type="text/javascript">
                $('.clockpicker').clockpicker();
            </script>
            
            <label>Intervalo: </label>
            <div class="row">
                <div class="col-md-4">60 minutos <br><input type="radio" name="keywords" value="60"></div>
                <div class="col-md-4">120 minutos <br><input type="radio" name="keywords" value="120"></div>
                <div class="col-md-4">180 minutos <br><input type="radio" name="keywords" value="180"></div>
            </div>
            <br>
            <label for="cupos-sabado">Cupos: </label>
            <input name = "cupos-sabado" type="text" class="form-control abm-inputs" id="cupos-sabado" placeholder="Ingrese cupos">
    </div>
    </div>
    
    
    <input type="submit" class="btn btn-primary" name="action" value="<?= $action; ?>"/>
    <input type="submit" class="btn btn-danger" name="action" value="Cancelar"/>
    
</form>

<table class="table table-hover abm-tablas">
    <thead>
        <tr>
            <th>Marcas: </th>
            <th>Modificar / Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($marcas as $marca) {?>
    <tr>
        <td class="acti-tipoDescripcion"><?= $marca["marca_nombre"];?></td>
        
        <td>
            <form class="form-inline" action="actions/actions_marcas.php" method="post">
                
                <input type="hidden" name="id" value="<?= $marca["id_marca"]; ?>"/>
                
                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>
                    
                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>
                
            </form>
        </td>
    </tr>
    <?php } ?>                          
    </tbody>
</table>

<?php require("partials/gestionFooter.php"); ?>
                   



