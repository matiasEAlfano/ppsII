<?php
    $seccion = isset($seccion) ? $seccion : ""; 
?>
<ul class="nav nav-pills nav-stacked">
    <li <?= $seccion == 'nueva' ? 'class="active"' : ''; ?> >
        <a href="formCategoria.php">nueva</a>
    </li>
<li <?= $seccion == 'listado' ? 'class="active"' : ''; ?> >
        <a href="listadoCategoria.php">listado</a>
    </li>
</ul>