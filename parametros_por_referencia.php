<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros por Referencia</title>
</head>
<body>

    <?php

        //Cuando colocamos el simbolo ampersand, delante del parametro se crea un vinculo con la variable
        //que estamos pasando es decir ($numero)
        /*function incrementa(&$valor1){

            $valor1++;

            return $valor1;
        }

        $numero = 5;

        echo incrementa($numero) . "<br>";*/

        //Por eso cuando imprimimos el valor de la variable $numero tambien se imprime un 6 ya que se hace
        //REFERENCIA desde el parametro de la funcion y tambien realiza el incremento a la variable
        //echo $numero;

        //Cuando pasamos un parametro por valor se olvida de todas las variables que le pasemos SOLO SE ALMACENA EL VALOR
        
        //SEGUNDO EJEMPLO
        function cambia_mayus(&$param){

            $param = strtolower($param);

            $param = ucwords($param);

            return $param;
        }

        $frase = "SeRgIo Y kAtIe";

        echo cambia_mayus($frase) . "<br>";

        echo $frase;



        
    ?>
    
</body>
</html>