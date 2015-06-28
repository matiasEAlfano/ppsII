<?php
    require('models/actiTipo.php');
    $c = new ActividadTipo();
    $tipos = $c->getAll();
?>

<?php foreach($tipos as $tipo) : ?>
    <tr>
        <td class="acti-tipoDescripcion"><?= $tipo["descripcion"];?></td>
        <td>
            <form class="form-inline" action="actions/actions-actividad-tipo.php" method="post">

                <input type="hidden" name="id" value="<?= $tipo["id"]; ?>"/>

                <button type="submit" name="action" value="editar" class="btn btn-success editar"><sapan class="glyphicon glyphicon-pencil" aria-hidden="true"></sapan></button>

                <button type="submit" name="action" value="eliminar" class="btn btn-danger eliminar"><sapan class="glyphicon glyphicon-remove" aria-hidden="true"></sapan></button>

            </form>
        </td>
    </tr>
<?php endforeach; ?>