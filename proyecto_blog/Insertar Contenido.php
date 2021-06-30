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

        $conexion = mysqli_connect("localhost", "root" ,"", "bbddblog");

        if(mysqli_connect_errno()){

            echo "Fallo al conectar con la base de datos";
                   
            exit();
    
        }

        if($_FILES["imagen"]["error"]){

            switch($_FILES["imagen"]["error"]){

                case 1:

                    echo "La imagen excede el tamaño permitido";
                
                    break;
                
                case 2:

                    echo "El tamaño del archivo excede 2 MB";

                    break;

                case 3:

                    echo "La imagen no se subio por completo";

                    break;
                
                case 4:

                    echo "No se ha seleccionado ninguna imagen";

                    break;
            }

        }else{

            echo "Entrada de blog subida correctamente <br>";
            
            //Si no se ha producido ningun error al subir la imagen a la bbdd
            if((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK))){

                $destino_ruta = "imagenes/";

                move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);

                echo "El archivo " . $_FILES["imagen"]["name"] . " se ha copiado en la carpeta de imagenes <br>";

            }else{

                echo "El archivo no se ha podido copiar a la carpeta de las imagenes <br>";
            }
        }

        $eltitulo = $_POST["campo_titulo"];

        date_default_timezone_set("America/Bogota");

        $fecha = date("Y-m-d H:i:s");

        $comentarios = $_POST["area_comentarios"];

        $laimagen = $_FILES["imagen"]["name"];

        $miconsulta = "INSERT INTO CONTENIDO (Titulo, Fecha, Comentario, Imagen) VALUES ('$eltitulo' , '$fecha', '$comentarios', '$laimagen')";

        $resultado = mysqli_query($conexion, $miconsulta);

        mysqli_close($conexion);

        echo "Se ha agregado la entrada de blog con exito. <br><br>";


    ?>

    <a href="Formulario.php">Añadir Nueva Entrada</a> <br>

    <a href="Mostrar blog.php">Mostrar blogs</a>
    
</body>
</html>