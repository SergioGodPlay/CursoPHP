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

        try{

            $base = new PDO("mysql:host=localhost; dbname=pruebas","root","");

            echo "Conexion Exitosa";
        
        }catch(Exception $e){

            //echo $e->getMessage();

            die("Error: " . $e->getMessage());
        
        }finally{

            $base = null;
        }

        


    ?>
    
</body>
</html>