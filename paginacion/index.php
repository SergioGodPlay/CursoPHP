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

        try{
        
            $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

            $tamagno_paginas = 3;

            //Si hemos pulsado en alguno numero de la paginacion
            if(isset($_GET["pagina"])){
                
                //Si el parametro que esta en el link es igual a 1 se redirige a la misma pagina
                if($_GET["pagina"] == 1){

                    header("location:index.php");
    
                }else{
    
                    $pagina = $_GET["pagina"];
                }
            }else{

                $pagina = 1;
            }
            
            $empezar_desde = ($pagina-1) * $tamagno_paginas;
            
            //Instruccion sql para saber cuantos registros devuelve la consulta
            $sql = "SELECT NOMBREARTÍCULO, PRECIO, SECCIÓN, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN = 'DEPORTES'";

            $resultado = $base->prepare($sql);

            $resultado->execute(array());

            $num_filas = $resultado->rowCount();

            $total_paginas = ceil($num_filas/$tamagno_paginas);

            echo "La consulta ha devuelto $num_filas registros <br>";

            echo "Mostrando la pagina $pagina de $total_paginas <br><br>";

            $resultado->closeCursor();

            //Instruccion sql para mostrar los registros en grupos de 3 en 3 (o el numero que le indiquemos en la variable $tamagno_paginas)
            $sql_limite = "SELECT NOMBREARTÍCULO, PRECIO, SECCIÓN, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN = 
            'DEPORTES' LIMIT $empezar_desde,$tamagno_paginas";

            $resultado = $base->prepare($sql_limite);

            $resultado->execute(array());

            while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

                echo "Nombre Artículo: " . $registro["NOMBREARTÍCULO"] . "<br>Seccion: " . $registro["SECCIÓN"] . 
                "<br>Precio: " . $registro["PRECIO"] . "<br>PAÍSDEORIGEN: " . $registro["PAÍSDEORIGEN"] . "<br><br>";
            }

        }catch(Exception $e){

            echo "Se ha producido un error: " . $e->getMessage() . " en la linea " . $e->getLine();
        }

        //------------------------------------------ PAGINACION --------------------------------//

        for($i = 1; $i <= $total_paginas; $i++){
            
            echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
        }
    ?>
    
</body>
</html>