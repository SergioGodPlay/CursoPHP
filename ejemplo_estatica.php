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

    function incrementaVariable(){

        //Al declarar la variable estatica el valor de esta se conserva y no se destruye
        //al finalizar la funcion
        static $contador = 0;

        $contador++;

        echo $contador . "<br>";
    }

    //Imprime 1
    incrementaVariable();

    //Imprime 2
    incrementaVariable();

    //Imprime 3
    incrementaVariable();

    //Imprime 4
    incrementaVariable();

?>
    
</body>
</html>