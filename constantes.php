<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    //Por convencion el nombre de las constantes debe ir en MAYUSCULAS
    define("AUTOR", "Sergio");

    //NO SE PUEDE CAMBIAR EL VALOR DE LA CONSTANTE
    //define("AUTOR", "Katie");

    //echo "El autor es: " . AUTOR;

    echo __LINE__ . "<br>";

    echo "El archivo se encuentra en: " . __FILE__;

?>
    
</body>
</html>