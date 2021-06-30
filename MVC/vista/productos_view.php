<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <style>

        td{
            border: 1px dotted red;
        }

    </style>

</head>
<body>

    <table class="table table-striped">

        <tr>
            <td>NOMBRE DEL ARTICULO</td>
        </tr>

    <?php

        foreach($losProductos as $registro){

            echo "<tr><td>" . $registro["NOMBREARTÍCULO"] . "</td></tr>";
        }

    ?>

    </table>
    
</body>
</html>