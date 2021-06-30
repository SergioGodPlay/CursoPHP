<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas de Blog</title>
</head>
<body>

    <h2 style="text-align: center;">BLOG</h2>

    <hr>

    <?php

        include_once("../modelo/Manejo_objetos.php");

        try{

            $miconexion = new PDO("mysql:host=localhost; dbname=bbddblog", "root", "");
    
            $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $miconexion->exec("SET CHARACTER SET utf8");

            $manejo_objetos = new Manejo_objetos($miconexion);

            $tabla_blog = $manejo_objetos->getContenidoPorFecha();

            if(empty($tabla_blog)){

                echo "No hay entradas de blog";

            }else{

                foreach($tabla_blog as $valor){

                    echo "<h3>" . $valor->getTitulo() . "</h3>";

                    echo "<h4>" . $valor->getFecha() . "</h4>";

                    echo "<div style='width:400px'>" . $valor->getComentario(). "</div><br>";

                    if($valor->getImagen() != ""){

                        echo "<img src='../imagenes/" . $valor->getImagen() . "' width='25%'><br>";
                    }
    
                    echo "<hr>";
                }
            }

        }catch(Exception $e){

            die("Error: " . $e->getMessage());

        }

    ?>

    <a href="Formulario.php">Añadir Nueva Entrada</a> <br>

</body>
</html>