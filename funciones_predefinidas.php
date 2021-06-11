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

        /*function suma($num1, $num2){

            $resultado = $num1 + $num2;

            return $resultado;
        }

        echo suma(5,6);*/

        //El segundo parametro de esta funcion es un parametro por defecto
        function frase_mayuscula($frase, $conversion = true){

            $frase = strtolower($frase);

            if($conversion == true){

                $resultado = ucwords($frase);

            }else{

                $resultado = strtoupper($frase);
            }

            return $resultado;
        }

        echo frase_mayuscula("Sergio y Katie", false);
        
    ?>
</body>
</html>