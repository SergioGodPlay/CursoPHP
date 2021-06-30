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

        $id = "";

        $nombre= "";

        $tipo = "";

        $contenido = "";

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

        $consulta = "SELECT * FROM ARCHIVOS WHERE ID = '2'";

        $resultado = mysqli_query($conexion, $consulta);

        while($fila = mysqli_fetch_array($resultado)){

            $id = $fila["Id"];

            $nombre = $fila["Nombre"];

            $tipo = $fila["Tipo"];

            $contenido = $fila["Contenido"];
        }

        echo "Id: $id <br>";

        echo "Nombre: $nombre <br>";

        echo "Tipo: $tipo <br>";

        echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "' alt='Imagen primer articulo' width='25%'>";

    ?>


</body>
</html>