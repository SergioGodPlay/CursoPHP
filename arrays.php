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

        //A diferencia de otros lenguajes en PHP no hace falta colocar el indice o
        //posicion del arreglo. En PHP se da por entendido que empieza desde la posicion 0
        /*$semana[] = "Lunes";

        $semana[] = "Martes";

        $semana[] = "Miercoles";

        $semana[] = "Jueves";

        $semana[] = "Viernes";

        for ($i=0; $i < count($semana); $i++) { 
            
            echo $semana[$i] . "<br>";
        }

        $semana[] = "Sabado";

        for ($i=0; $i < count($semana); $i++) { 
            
            echo $semana[$i] . "<br>";
        }*/

        //SEGUNDA FORMA DE CREAR UN ARRAY 
        $semana = array("Lunes","Martes", "Miercoles", "Jueves");

        //Ordena un arreglo alfabeticamente
        sort($semana);

        for ($i=0; $i < count($semana); $i++) { 
            
            echo $semana[$i] . "<br>";
        }

        //$datos = array("Nombre"=>"Sergio", "Apellido"=>"Sanchez", "Edad"=>27);

        //$datos["Pais"] = "Colombia";

        /*foreach($datos as $clave => $valor){

            echo "A $clave le corresponde $valor <br>";
        }*/

        /*$datos = "Martin";

        if(is_array($datos)){

            echo "Es un arreglo";

        }else{

            echo "No es un arreglo";
        }*/


    ?>
    
</body>
</html>