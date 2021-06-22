<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>

    <style>

        h1,h2{
            text-align: center;
        }

        table{
            width: 30%;
            background-color: #ffc;
            border: 2px dotted #f00;
            margin: auto;
        }

        .izq{
            text-align: right;
        }

        .der{

            text-align: left;
        }

        td{
            text-align: center;
            padding: 10px;
        }

    </style>
</head>
<body>

    <?php

        $logeado = false;

        if(isset($_POST["enviar"])){

            $login = htmlentities(addslashes($_POST["login"]));

            $password = htmlentities(addslashes($_POST["password"]));

            try{
            
                $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $base->exec("SET CHARACTER SET utf8");

                $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIO = :login AND PASSWORD = :password";

                $resultados = $base->prepare($sql);

                $resultados->bindValue(":login", $login);

                $resultados->bindValue(":password", $password);

                $resultados->execute();

                $numero_registros = $resultados->rowCount();

                if($numero_registros != 0){
                
                    //echo "Bienvenido $login";

                    //Iniciamos una nueva sesion para el usuario logeado
                    session_start();

                    //Almacenamos el nombre del usuario dentro de la variable superglobal $_SESSION[]
                    $_SESSION["usuario"] = $login;

                    //global $logeado;

                    $logeado = true;

                    //header("location:usuarios_registrados1.php");

                }else{

                    //header("location:login.php");

                    echo "Usuario o Contraseña Incorrectos";
                }

            }catch(Exception $e){

                die ("Error; " . $e->getMessage());
            }
        }
    ?>

    <?php

        if(!isset($_SESSION["usuario"])){

            include("formulario.html");

        }else{

            if($logeado){

                $elGenero = detectaGenero($_SESSION["usuario"]);
            }

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

    <?php

        if($logeado){

            if($elGenero == "Chico"){

                echo "<h3>Bienvenido " . $_SESSION["usuario"] . "</h3><br>";
    
            }else{
    
                echo "<h3>Bienvenida " . $_SESSION["usuario"] . "</h3><br>";
            }
        }
        
    ?>

    <h2>Contenido de la Web</h2>

    <table width=800 border="0">
        <tr>
            <td><img src="imagenes/katie.jpg" width="300" height="auto"></td>
            <td><img src="imagenes/andariel.jpg" width="300" height="auto"></td>
        </tr>

        <tr>
            <td><img src="imagenes/soffy.jpg" width="300" height="auto"></td>
            <td><img src="imagenes/katie2.jpg" width="300" height="300"></td>
        </tr>
    </table>
    
</body>
</html>