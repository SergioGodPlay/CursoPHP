<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambito de las variables</title>
</head>
<body>

<?php

    $nombre = "Sergio";

    function dameNombre(){

        //Palabra reservada global para declarar una variable de ambito global
        global $nombre;

        //Esta variable es de ambito local (Solo funciona dentro de esta) y nada tiene que ver
        //con la variable con el mismo nombre que esta afuera
        $nombre = "El nombre es " . $nombre;
    }

    dameNombre();

    echo $nombre;



?>
    
</body>
</html>