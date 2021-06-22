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

        //Reanudamos la sesion existente
        session_start();

        //Si no hay informacion en la variable superblogal $_SESSION
        if(!isset($_SESSION["usuario"])){

            header("location:login.php");
        
        }else{

            $elGenero = detectaGenero($_SESSION["usuario"]);
        }

        function detectaGenero($nombre) {
            $genero = "Chico";
            $excepcionesChico = array('Borja',);
            $excepcionesChica = array('Rocio','Isabel');
            $letra = substr($nombre, -1);
            if (($letra == 'y' || $letra == "a" || in_array($nombre, $excepcionesChica)) && !in_array($nombre, $excepcionesChico)) {
                $genero = "Chica";
            }
            return $genero;
        }

        
    ?>

    <h1>Bienvenidos Usuarios</h1>

    <?php

        if($elGenero == "Chico"){

            echo "<h3>Usuario " . $_SESSION["usuario"] . "</h3><br>";

        }else{

            echo "<h3>Usuario " . $_SESSION["usuario"] . "</h3><br>";
        }

    ?>

    <p><a href="cierre.php">Cerrar Sesion</a></p>   

    <p>Esto es informacion solo para usuarios registrados</p>

    <p><a href="usuarios_registrados1.php">Volver</a></p>


</body>
</html>