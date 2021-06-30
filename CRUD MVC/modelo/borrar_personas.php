<?php

    include("conexion.php");

    $id = $_GET["id"];

    $base = Conectar::conexion();

    $base->query("DELETE FROM DATOS_USUARIOS WHERE Id = '$id'");

    header("location:../index.php");


?>