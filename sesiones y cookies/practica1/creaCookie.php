<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>

    <?php

        setcookie("idiomaSeleccionado", $_GET["idioma"], time() + 86400);

        header("location:ver_cookie.php");

    ?>
    
</body>
</html>