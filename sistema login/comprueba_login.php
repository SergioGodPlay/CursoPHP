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

                header("location:usuarios_registrados1.php");

            }else{

                header("location:login.php");
            }

        }catch(Exception $e){

            die ("Error; " . $e->getMessage());
        }

    ?>
    
</body>
</html>