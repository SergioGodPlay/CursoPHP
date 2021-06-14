<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>

        body{
            margin:10px;
        }

    </style>
    <title>Pagina de Busqueda</title>

    <?php

    function ejecuta_consulta($labusqueda){

        //Almacenamos en una variable lo que esta en el cuadro de texto
        //$busqueda = $_GET["buscar"];

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
        $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$labusqueda%'";

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
    }
?>

</head>
<body>

    <?php

        //Colocando una arroba delante de la variable evitamos que salga el error 
        //si ejecutamos la pagina en un servidor local
        @$mibusqueda = $_GET["buscar"];

        $mipagina = $_SERVER["PHP_SELF"];

        if($mibusqueda != null){

            ejecuta_consulta($mibusqueda);

        }else{

            echo ("<form action='" . $mipagina . "' method='GET'>

                <label>Buscar <input type='text' name='buscar'></label>
    
                <input type='submit' value='Buscar' name='enviando'>
    
                </form>");
        }
    ?>
</body>
</html>