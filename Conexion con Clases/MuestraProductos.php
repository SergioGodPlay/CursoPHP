<?php

    require("DevuelveProductos.php");

    $pais = $_GET["buscar"];

    $productos = new DevuelveProductos();

    //El metodo getProductos devuelve un arreglo con todos los productos
    //y lo guardamos en esta variable
    $arrayproductos = $productos->getProductos($pais);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Con Clases Propias</title>

    <style>

        #tabla{
            width: 60%;
            margin: auto;
            table-layout: fixed;
            font-size: 0.8em;
            font-family: Arial, Helvetica, sans-serif;
            
        }

        th, td {
            border: 1px solid blue;
            width: 100px;
            word-wrap: break-word;
        }

        h1{
            text-align: center;
            color: #00f;
            border-bottom: dotted #0000ff;
            width: 50%;
            margin: auto;

        }

    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    <h1>Lista De Productos</h1>

    <?php

        foreach($arrayproductos as $elemento){
            
            echo "<table align='center' class='table table-striped table-dark' id='tabla'><tr><td>";

            echo $elemento["CÓDIGOARTÍCULO"] . "</td><td>";

            echo $elemento["NOMBREARTÍCULO"] . "</td><td>";

            echo $elemento["SECCIÓN"] . "</td><td>";

            echo $elemento["PRECIO"] . "</td><td>";

            echo $elemento["FECHA"] . "</td><td>";

            echo $elemento["IMPORTADO"] . "</td><td>";

            echo $elemento["PAÍSDEORIGEN"] . "</td></tr></table>";

            //echo "<br>";
        }

    ?>
    
</body>
</html>