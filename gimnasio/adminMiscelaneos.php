<?php

function getConnection(){
    
    $mysqli = new mysqli("localhost", "root", "admin", "atleticus");
    
    if($mysqli->connect_errno){
        die("Error al intentar establecer la conexion con la base");
    }else{
        return $mysqli;
    }
}

$connection = getConnection();
$query = "SELECT id, descripcion FROM `actividad-tipo`";
$tipos = array();
if( $result = $connection->query($query) ){  //se evalua lo que le paso a $resul
    
    while($fila = $result->fetch_assoc()){
        $tipos[] = $fila; //carga el array de categorias con lo que trae de la base.
    }
    $result->free(); //libera la memoria del result.
}else{
    //no se encontraron resultados;
}

?>


<ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#acti-tipo" role="tab" data-toggle="tab">Actividad Tipo</a></li>
    <li role="presentation"><a href="#" role="tab" data-toggle="tab">?</a></li>
    <li role="presentation"><a href="#" role="tab" data-toggle="tab">?</a></li>
    <li role="presentation"><a href="#" role="tab" data-toggle="tab">?</a></li>
    <li role="presentation"><a href="#" role="tab" data-toggle="tab">?</a></li>
    <li role="presentation"><a href="#" role="tab" data-toggle="tab">?</a></li>
</ul>

<div class="tab-content">

<div role="tabpanel" class="tab-pane fade" id="acti-tipo">
    <label>Tipo de Actividad:</label>
    <input style="width: 200px" type="text"  class="form-control" placeholder="Tipo">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Descripcion</th>
            </tr>
          </thead>
          <tbody>
              
            <?php foreach($tipos as $tipo) {?>
            <tr>
              <td class="acti-tipoId"><?= $tipo["id"];?></td>
              <td class="acti-tipoDescripcion"><?= $tipo["descripcion"];?></td>
              <td>
                <div class="btn-group">
                  <button type="button" class="btn btn-default editar">Editar</button>
                  <button type="button" class="btn btn-default eliminar">Eliminar</button>
                </div>
              </td>
            </tr>
            <?php } ?>                          
          </tbody>
        </table>
</div>

</div>
                    
                   
    
    


