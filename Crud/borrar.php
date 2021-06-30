<?php

    include("conexion.php");

    $id = $_GET["id"];

    $base->query("DELETE FROM DATOS_USUARIOS WHERE Id = '$id'");

    header("location:index.php");


?>