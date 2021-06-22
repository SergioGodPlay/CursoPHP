
<?php

    $cod = $_GET["c_art"];

    $sec = $_GET["seccion"];

    $nom = $_GET["n_art"];

    $pre = $_GET["precio"];

    $fec = $_GET["fecha"];

    $imp = $_GET["importado"];

    $por = $_GET["pais_origen"];

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

    $sql = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO,
            PAÍSDEORIGEN) VALUES (?, ?, ?, ?, ?, ?, ?)";


    //Creamos una sentencia o consulta preparada
    $resultado = mysqli_prepare($conexion, $sql);

    //Agrega variables a una sentencia preparada como parámetros
    //Con "s" especificamos que es un parametro de tipo string
    $ok = mysqli_stmt_bind_param($resultado, "sssssss", $cod, $sec, $nom, $pre, $fec, $imp, $por);

    //Ejecuta la sentencia preparada
    $ok = mysqli_stmt_execute($resultado);

    //Si la sentencia preparada tiene exito
    if($ok == false){

        echo "Error al ejecutar la consulta";

    }else{

        //Vincula variables a una sentencia preparada para el almacenamiento de resultados
        //$ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);

        echo "Agregado Nuevo Registro <br><br>";

        echo "Nombre Articulo: $nom"; 

        /*while(mysqli_stmt_fetch($resultado)){

            echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
        }

        mysqli_stmt_close($resultado);*/
    }

?>