<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>

    <?php

        require("modelo/paginacion.php");

        if(isset($_POST["cr"])){

            $nombre = $_POST["nom"];

            $apellido = $_POST["ape"];

            $direccion = $_POST["dir"];

            $sql = "INSERT INTO DATOS_USUARIOS (Nombre, Apellido, Direccion) VALUES (:nom, :ape, :dir)";

            $resultado = $base->prepare($sql);

            $resultado->execute(array(":nom"=> $nombre, ":ape"=> $apellido, ":dir"=> $direccion));

            header("location:index.php");
        }

    ?>

    <form name="formularioInsertar" method="POST" action="index.php">
        <table width="50%" border="0" align="center" class="table table-striped table-dark">

            <tr>
                <td class="primera_fila">Id</td>
                <td class="primera_fila">Nombre</td>
                <td class="primera_fila">Apellido</td>
                <td class="primera_fila">Direccion</td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
            </tr>

            <?php

                //Por cada objeto que hay en el arreglo $registros lo guardamos en la variable $persona
                foreach($lasPersonas as $persona): ?>

            <tr>
                <!-- Accedemos a la propiedad de cada objeto persona que es el nombre de los campos de la tabla-->

                <td><?php echo $persona["Id"]; ?></td>
                <td><?php echo $persona["Nombre"]; ?></td>
                <td><?php echo $persona["Apellido"]; ?></td>
                <td><?php echo $persona["Direccion"]; ?></td>
            
                <!-- Le pasamos por la url el id de la persona a la pagina que se encarga de eliminar al registro -->

                <td class="bot"><a href="modelo/borrar_personas.php?id=<?php echo $persona["Id"] ?>"><input type="button" name="del" id="del" value="Borrar"></a></td>
                <td class="bot"><a href="modelo/editar_personas.php?id=<?php echo $persona["Id"] ?> & nom=<?php echo $persona["Nombre"] ?> & ape=<?php echo 
                $persona["Apellido"] ?> & dir=<?php echo urlencode($persona["Direccion"]) ?>"><input type="button" name="up" id="up" value="Actualizar"></a></td>
            </tr>
        
            <?php  

                //Indicando que cerramos el bucle foreach se repetira la fila (tr) tantan veces como registros
                //haya en la tabla
                endforeach; ?>

            <tr>
                <td></td>
                <td align="center"><input type="text" name="nom" size="10" class="centrado"></td>
                <td align="center"><input type="text" name="ape" size="10" class="centrado"></td>
                <td align="center"><input type="text" name="dir" size="10" class="centrado"></td>
                <td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"></td>
            </tr>

            <tr>
                <td style="visibility:hidden;">&nbsp;</td>
                <td style="visibility:hidden;">&nbsp;</td>
                <td style="visibility:hidden;">&nbsp;</td>
                <td style="visibility:hidden;">&nbsp;</td>
                <td style="visibility:hidden;">&nbsp;</td>
            </tr>

            <tr>
                <td style="visibility:hidden;">&nbsp;</td>
                <td style="visibility:hidden;">&nbsp;</td>
                <td style="visibility:hidden;">&nbsp;</td>

                <td style="border: transparent; float:right;">
                
                <?php

                //------------------------------------------ PAGINACION --------------------------------//
                    echo "Pagina: ";

                    for($i = 1; $i <= $total_paginas; $i++){
        
                        echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
                    }

                ?>
                
                </td>
                <td style="visibility: hidden;">&nbsp;</td>
            </tr>

        </table>

    </form>
    
</body>
</html>