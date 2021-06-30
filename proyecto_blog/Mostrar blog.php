<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2 style="text-align: center;">BLOG</h2>

    <hr>

    <?php

        $conexion = mysqli_connect("localhost", "root" ,"", "bbddblog");

        if(mysqli_connect_errno()){

            echo "Fallo al conectar con la base de datos";
           
            exit();

        }

        $sql = "SELECT * FROM CONTENIDO ORDER BY FECHA DESC";

        if($resultado = mysqli_query($conexion, $sql)){

            while($registro = mysqli_fetch_assoc($resultado)){

                echo "<h3>" . $registro["Titulo"] . "</h3>";

                echo "<h4> Fecha y Hora: " . $registro["Fecha"] . "</h4>";

                echo "<div style='width:400px'>" . $registro["Comentario"] . "</div><br>";
                
                //Si la imagen no esta vacia
                if($registro["Imagen"] != ""){

                    echo "<img src='imagenes/" . $registro["Imagen"] . "' width='25%'><br>";
                }

                echo "<hr>";
            }
        }

    ?>
    
</body>
</html>