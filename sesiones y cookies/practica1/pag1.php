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

        if(isset($_COOKIE["idiomaSeleccionado"])){

            if($_COOKIE["idiomaSeleccionado"] == "es"){

                header("location:spanish.php");

            }else{

                header("location:english.php");
            }
        }
    ?>
    
    <table width="25%" border="0" align="center">

        <tr>
            <td colspan="2" align="center"><h1>Elige Idioma</h1></td>
        </tr>

        <tr>

            <td align="center"><a href="creaCookie.php?idioma=es"><img src="img/Bandera_de_España.png" width="90" height="60"></a></td>
            <td align="center"><a href="creaCookie.php?idioma=en"><img src="img/usa.png" width="90" height="60"></a></td>
        </tr>
    </table>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
</body>
</html>