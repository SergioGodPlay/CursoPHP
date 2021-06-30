<?php

    require_once("modelo/personas_modelo.php");

    //Al instanciar la clase ProductosModel estamos llamando al constructor
    $persona = new PersonasModel();

    $lasPersonas = $persona->getPersonas();

    require_once("vista/personas_view.php");


?>