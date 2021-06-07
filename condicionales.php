<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>

    <?php

        $var1 = true;

        $var2 = false;

        //Si alguno de los 2 valores evaludados con el operador && es false el resultado sera false
        $resultado = $var1 && $var2;

        //Como el (=) tiene mayor prioridad que el (and) se almacena dentro de resultado
        //el valor de ($var1) que es true y despues evalua lo que hay a continuacion
        //$resultado = $var1 and $var2;

        //Si se coloca solo la variable a evaluar es igual que poner la expresion 
        //($resultado == true) (Se evalua si es verdad (true))
        if($resultado){

            echo "Verdadero";

        }else{

            echo "Falso";
        }

        




    ?>
    
</body>
</html>