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

        //La variable superblogal $_COOKIE[] lee la informacion de las cookies que se guardan
        //en el directorio por defecto segun el navegador (SI LO COOKIE NO EXISTE DARA UN ERROR)
        if(isset($_COOKIE["prueba"])){

            echo $_COOKIE["prueba"];

        }else{

            echo "No existe la cookie con ese nombre";
        }
        
    ?>
    
</body>
</html>