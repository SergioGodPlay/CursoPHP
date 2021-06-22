<?php

    $usuario = $_POST["usuario"];

    $password = $_POST["password"];

    $pass_cifrado = password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));

    try{
        $base = new PDO("mysql:host=localhost; dbname=pruebas","root","");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql = "INSERT INTO USUARIOS_PASS (USUARIO, PASSWORD) VALUES (:usu, :pass)";

        $resultado = $base->prepare($sql);

        $resultado->execute(array(":usu"=>$usuario, ":pass"=>$pass_cifrado));

        echo "Se ha insertado el registro exitosamente";

        $resultado->closeCursor();

    }catch(Exception $e){
        
        echo "Se ha producido un error: " . $e->getMessage();

    }finally{

        $base= null;
    }

?>