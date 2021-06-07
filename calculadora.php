<style>
    .resultado{

        color:red;
        font-weight: bold;
        font-size: 32px;
    }

</style>

<?php

    function calcular($calculo){

        if(!strcmp("Suma", $calculo)){

            global $numero1, $numero2;

            $resultado = $numero1 + $numero2;

            echo "<p class='resultado'>El resultado es $resultado </p>";
        }

        if(!strcmp("Resta", $calculo)){

            global $numero1, $numero2;

            $resultado = $numero1 - $numero2;

            echo "<p class='resultado'>El resultado es $resultado </p>";
        }

        if(!strcmp("Multiplicacion", $calculo)){

            global $numero1, $numero2;

            $resultado = $numero1 * $numero2;

            echo "<p class='resultado'>El resultado es $resultado </p>";
        }

        if(!strcmp("Division", $calculo)){

            global $numero1, $numero2;

            $resultado = $numero1 / $numero2;

            echo "<p class='resultado'>El resultado es $resultado </p>";
        }

        if(!strcmp("Modulo", $calculo)){

            global $numero1, $numero2;

            $resultado = $numero1 % $numero2;

            echo "<p class='resultado'>El resultado es $resultado </p>";
        }

        if(!strcmp("Incremento", $calculo)){

            global $numero1;

            $numero1++;

            echo "<p class='resultado'>El resultado es $numero1 </p>";
        }

        if(!strcmp("Decremento", $calculo)){

            global $numero1;

            $numero1--;

            echo "<p class='resultado'>El resultado es $numero1 </p>";
        }
}
?>