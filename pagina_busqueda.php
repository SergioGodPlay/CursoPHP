
<?php

    //Almacenamos en una variable lo que esta en el cuadro de texto
    $busqueda = $_GET["buscar"];

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

    //Consulta con filtro
    $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";

    $resultado = mysqli_query($conexion,$consulta);

    //Mientras haya registros en el resultset (No importa si hay 2 o mil registros
    //SE RECORRERA TODA LA TABLA)
    while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

        echo "<table><tr><td>";

        echo $fila["CÓDIGOARTÍCULO"] . "</td><td>";
    
        echo $fila["NOMBREARTÍCULO"] . "</td><td>";

        echo $fila["SECCIÓN"] . "</td><td>";

        echo $fila["PRECIO"] . "</td><td>";

        echo $fila["IMPORTADO"] . "</td><td>";
    
        echo $fila["PAÍSDEORIGEN"] . "<td></td></tr></table>";

    }

    mysqli_close($conexion);
?>