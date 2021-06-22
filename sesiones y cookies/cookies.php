<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Cookies</title>
</head>
<body>

    <?php

        //Si no establecemos el tiempo de vida de la cookie se destruye al cerrar al navegador
        setcookie("prueba", "Esta es la informacion de la primera cookie", time()+ 300);

    ?>
    
</body>
</html>