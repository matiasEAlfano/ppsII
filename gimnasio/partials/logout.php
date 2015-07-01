<?php

    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["tarjeta"]);
    header('Location: ../index.php', true, 303);
?>