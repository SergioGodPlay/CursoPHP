<?php

    $nombre_archivo = $_FILES["archivo"]["name"];

    $tipo_archivo = $_FILES["archivo"]["type"];

    $tamagno_archivo = $_FILES["archivo"]["size"];

    if($tamagno_archivo <= 3000000){

        $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/uploads/";

        move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta_destino . $nombre_archivo);

    }else{

        echo "El archivo excede el tamaño maximo permitido";
    }

    require("datos_conexion.php");
 
    $conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

    
    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la base de datos";
               
        exit();

    }

   
    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

    mysqli_set_charset($conexion, "utf-8");

    $archivo_objetivo = fopen($carpeta_destino . $nombre_archivo, "r");

    $contenido = fread($archivo_objetivo, $tamagno_archivo);

    $contenido = addslashes($contenido);

    fclose($archivo_objetivo);

    $sql = "INSERT INTO ARCHIVOS (NOMBRE, TIPO, CONTENIDO) VALUES ('$nombre_archivo', '$tipo_archivo', '$contenido')";

    $resultado = mysqli_query($conexion,$sql);

    if(mysqli_affected_rows($conexion) > 0){

        echo "Se ha insertado el registro con exito";

    }else{

        echo "No se ha podido insertar el registro";
    }
?>