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

        $contador = 0;

        try{
            
            $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

            $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIO = :login";

            $resultados = $base->prepare($sql);

            $resultados->execute(array(":login" => $login));

            while($registro = $resultados->fetch(PDO::FETCH_ASSOC)){
                
                //echo "Usuario:" . $registro["USUARIO"] . "<br>" . " Contraseña: " . $registro["PASSWORD"];

                if(password_verify($password, $registro["PASSWORD"])){

                    $contador++;
                }
            }

            if($contador > 0){

                 echo "Usuario registrado";

            }else{

                echo "Usuario no registrado";
            }

            $resultados->closeCursor();

        }catch(Exception $e){

            die ("Error; " . $e->getMessage());
        }

    ?>
    
</body>
</html>