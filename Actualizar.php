
<?php

//Almacenamos en una variable lo que esta en el cuadro de texto
//$busqueda = $_GET["buscar"];

    $cod = $_GET["c_art"];

    $sec = $_GET["seccion"];

    $nom = $_GET["n_art"];

    $pre = $_GET["precio"];

    $fec = $_GET["fecha"];

    $imp = $_GET["importado"];

    $por = $_GET["p_origen"];

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

    
    $consulta = "UPDATE PRODUCTOS SET CÓDIGOARTÍCULO = '$cod', SECCIÓN = '$sec', NOMBREARTÍCULO = '$nom', PRECIO = '$pre', 
    FECHA = '$fec', IMPORTADO = '$imp', PAÍSDEORIGEN = '$por' WHERE CÓDIGOARTÍCULO = '$cod'";

    $resultado = mysqli_query($conexion,$consulta);

    if($resultado == false){

        echo "Error al ingresar los datos";

    }else{

        echo "Registro actualizado con Exito <br><br>";

        echo "<table><tr><td>$cod</td></tr>";

        echo "<tr><td>$sec</td></tr>";

        echo "<tr><td>$nom</td></tr>";

        echo "<tr><td>$pre</td></tr>";

        echo "<tr><td>$fec</td></tr>";

        echo "<tr><td>$imp</td></tr>";

        echo "<tr><td>$por</td></tr></table>";
    }

    mysqli_close($conexion);

?>