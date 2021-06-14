
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

    //echo "<table><tr><td>";

    echo "<form action='Actualizar.php' method='GET'>";

    echo "<input type='text' name='c_art' value='" . $fila["CÓDIGOARTÍCULO"] . "' readonly><br>";

    echo "<input type='text' name='n_art' value='" . $fila["NOMBREARTÍCULO"] . "'><br>";

    echo "<input type='text' name='seccion' value='" . $fila["SECCIÓN"] . "'><br>";

    echo "<input type='text' name='precio' value='" . $fila["PRECIO"] . "'><br>";

    echo "<input type='text' name='fecha' value='" . $fila["FECHA"] . "'><br>";

    echo "<input type='text' name='importado' value='" . $fila["IMPORTADO"] . "'><br>";

    echo "<input type='text' name='p_origen' value='" . $fila["PAÍSDEORIGEN"] . "'><br>";

    echo "<input type ='submit' name='enviando' value='Actualizar'>";

    echo "</form>";

}

mysqli_close($conexion);
?>