<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Strings</title>

    <style>

        .resaltar{

            color:red;
            font-weight: bold;
        }

    </style>
</head>
<body>

    <?php

        $variable1 = "Casa";

        $variable2 = "CASA";

        //Devuelve 1 si no son iguales y 0 si son iguales
        $resultado = strcasecmp($variable1, $variable2);

        if(!$resultado){

            echo "Son iguales";

        }else{

            echo "No son iguales";
        }

        //Si iniciamos con comilla doble ("") las comillas internas deberan 
        //ser comillas simples ('') o visceversa
        //echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";

        //echo "Hola $nombre";

    ?>

    
    
</body>
</html>