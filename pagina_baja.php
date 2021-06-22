
<?php

    require("datos_conexion.php");

    //La funcion mysqli_connect abre una nueva conexion con una base de datos MYSQL
    $conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

    //Almacenamos en una variable lo que esta en el cuadro de texto
    $usuario = mysqli_real_escape_string($conexion, $_GET["usu"]);

    $contra = mysqli_real_escape_string($conexion, $_GET["con"]);

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
    //$consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";

    $consulta = "DELETE FROM USUARIOS WHERE USUARIO ='$usuario' AND CONTRA = '$contra'";

    echo "$consulta <br><br>";

    mysqli_query($conexion, $consulta);

    if(mysqli_affected_rows($conexion) > 0){

        echo "Se ha eliminado un registro";

    }else{

        echo "No se ha encontrado informacion para borrar";

    }

    

    mysqli_close($conexion);
?>