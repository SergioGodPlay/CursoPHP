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

        require("datos_conexion.php");

        //La funcion mysqli_connect abre una nueva conexion con una base de datos MYSQL
        $conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

        //Si hubo un error al conectar con la base de datos
        if(mysqli_connect_errno()){

            echo "Fallo al conectar con la base de datos";
        
            //Termina el intento con la conexion y sale del programa
            exit();

        }

        //Especifica la base de datos con la que vamos a conectar
        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

        //Establece el juego de caracteres para los registros de la bbdd
        mysqli_set_charset($conexion, "utf-8");

        $consulta = "SELECT FOTO FROM PRODUCTOS WHERE CÓDIGOARTÍCULO = 'AR01'";

        $resultado = mysqli_query($conexion, $consulta);

        while($fila = mysqli_fetch_array($resultado)){

            $ruta_img = $fila["FOTO"];
        }

    ?>

    <div>
        <img src="/uploads/<?php echo $ruta_img; ?>" alt="Imagen primer articulo" width="25%">
    </div>
    
</body>
</html>