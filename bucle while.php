<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
</head>
<body>

    <?php

        $i = 1;

        while($i <= 10){

            echo "Estamos ejecutando el codigo del bucle: ";
            
            //Si no incrementamos el valor de la variable seria un BUCLE INFINITO
            echo $i++ . "<br>";
        }

        /*do{
            //En un bucle do-while el codigo se ejecutara al menos una vez
            echo "Estamos ejecutando el codigo del bucle: ";

            echo $i++. "<br>";

        }while($i <= 2);*/ 
    ?>
    
</body>
</html>