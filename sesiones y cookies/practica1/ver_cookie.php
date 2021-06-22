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

        //Si no se ha creado la cookie
        if(!$_COOKIE["idiomaSeleccionado"]){

            header("location:pag1.php");
        
        //Si el usuario ha seleccionado el idioma español
        }else if($_COOKIE["idiomaSeleccionado"] == "es"){

            header("location:spanish.php");
        
        //Si el usuario ha seleccionado el idioma ingles
        }else{
            
            header("location:english.php");
        }

    ?>
    
</body>
</html>