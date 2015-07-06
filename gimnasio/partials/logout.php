<?php

    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["tarjeta"]);
    unset($_SESSION["carrito"]);
    header('Location: ../index.php', true, 303);
?>