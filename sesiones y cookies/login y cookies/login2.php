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

                    $logeado = true;

                    if(isset($_POST["recordar"])){

                        setcookie("nombre_usuario", $_POST["login"], time() + 86400);
                    }

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

        if($logeado == false){

            if(!isset($_COOKIE["nombre_usuario"])){

                include("formulario.html");
            }

        }else{

            if($logeado){

                $elGenero = guardaUsuario($_POST["login"]);
            }

        }

        function guardaUsuario($nombre) {
            $genero = "Chico";
            $excepcionesChico = array('Borja',);
            $excepcionesChica = array('Rocio','Isabel');
            $letra = substr($nombre, -1);
            if (($letra == 'y' || $letra == "a" || in_array($nombre, $excepcionesChica)) && !in_array($nombre, $excepcionesChico)) {
                $genero = "Chica";
            }

            return $genero;
        }

        if(isset($_COOKIE["nombre_usuario"])){

            $elGenero = guardaCookie($_COOKIE["nombre_usuario"]);
        }

        function guardaCookie($nombre) {
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

                echo "<h3>Bienvenido " . $_POST["login"] . "</h3><br>";
    
            }else{
    
                echo "<h3>Bienvenida " . $_POST["login"] . "</h3><br>";
            }
        }

        if(isset($_COOKIE["nombre_usuario"])){

            if($elGenero == "Chico"){

                echo "<h3>Bienvenido " . $_COOKIE["nombre_usuario"] . "</h3><br>";
    
            }else{
    
                echo "<h3>Bienvenida " . $_COOKIE["nombre_usuario"] . "</h3><br>";
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
    
    <?php

        if($logeado == true || isset($_COOKIE["nombre_usuario"])){

            include("contenido_registrados.html");
        }

    ?>
</body>
</html>