<?php

    require_once("conexion.php");

    $base = Conectar::conexion();

    //------------- Variables de la Paginacion---------------------//

    $tamagno_paginas = 10;

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
    $sql = "SELECT * FROM DATOS_USUARIOS";

    $resultado = $base->prepare($sql);

    $resultado->execute(array());

    $num_filas = $resultado->rowCount();

    $total_paginas = ceil($num_filas/$tamagno_paginas);

    //------------------------------------------------------------//

?>