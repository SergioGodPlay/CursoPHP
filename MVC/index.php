<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo MVC</title>

    <style>

        h1{
            text-align: center;
        }

    </style>
</head>
<body>

    <h1>Modelo Vista Controlador</h1>

    <br>

    <?php

        //Como todo comienza desde este archivo (index.php) todas las rutas deben apuntar desde la raiz
        require_once("controlador/productos_controlador.php");

    ?>
    
</body>
</html>