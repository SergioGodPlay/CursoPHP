<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Registros</title>
    <link rel="stylesheet" type="text/css" href="hoja.css">
</head>
<body>

    <h1>ACTUALIZAR</h1>

    <?php

        include("conexion.php");

        //Si no se ha pulsado el boton de actualizar
        if(!isset($_POST["actualizar"])){

            $id = $_GET["id"];

            $nom = $_GET["nom"];

            $ape = $_GET["ape"];

            $dir = $_GET["dir"];

        }else{

            $id = $_POST["id"];

            $nom = $_POST["nom"];

            $ape = $_POST["ape"];

            $dir = $_POST["dir"];

            $sql = "UPDATE DATOS_USUARIOS SET Nombre = :miNom, Apellido = :miApe, Direccion = :miDir WHERE Id = :miId";

            $resultado = $base->prepare($sql);

            $resultado->execute(array(":miId"=> $id, ":miNom"=> $nom, ":miApe"=> $ape, ":miDir"=> $dir));

            header("location:index.php");
        }
    ?>

    <p>&nbsp;</p>
    <form name="form1" method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">

        <table width="25%" border="0" align="center">

            <tr>
                <td class="sin"></td>
                <td class="sin"><label for="id"></label>
                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                </td>
            </tr>

            <tr>
                <td>Nombre</td>
                <td><label for="nom"></label>
                    <input type="text" name="nom" id="nom" value="<?php echo $nom ?>">
                </td>
            </tr>

            <tr>
                <td>Apellido</td>
                <td>    <label for="ape"></label>
                    <input type="text" name="ape" id="ape" value="<?php echo $ape ?>">
                </td>
            </tr>

            <tr>
                <td>Direccion</td>
                <td><label for="dir"></label>
                    <input type="text" name="dir" id="dir" value="<?php echo $dir ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="actualizar" id="actualizar" value="Actualizar"></td>
            </tr>
                
        </table>
    </form>
    
    
</body>
</html>