<?php

    $nombre_imagen = $_FILES["imagen"]["name"];

    $tipo_imagen = $_FILES["imagen"]["type"];

    $tamagno_imagen = $_FILES["imagen"]["size"];

    if($tamagno_imagen <= 3000000){

        if($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png"){

            $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/uploads/";

            move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpeta_destino . $nombre_imagen);

        }else{

            echo "Solo se pueden subir imagenes con formato jpg/jpeg/png";
        }

    }else{

        echo "La imagen excede el tamaño maximo permitido";
    }

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
    $sql = "UPDATE PRODUCTOS SET FOTO = '$nombre_imagen' WHERE CÓDIGOARTÍCULO = 'AR01'";

    $resultado = mysqli_query($conexion,$sql);

    
    

?>