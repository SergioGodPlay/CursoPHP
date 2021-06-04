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

        $nombre = "Sergio";

        $edad = 27;

        //Para concatenar en PHP se utiliza el . (Uilizando comilla doble podemos incluir la variable dentro y funcionara)
        //print("El nombre del usuario es $nombre");

        //Si utilizamos comilla simple escribira literalmente el texto y no reconoce la variable
        //print('El nombre del usuario es $nombre');

        echo "El nombre es " . $nombre . " y tiene " . $edad . " años";

        echo $nombre, $edad;

    ?>
</body>
</html>