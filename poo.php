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

        include("vehiculos.php");

        $mazda = new Coche();

        $mack = new Camion();

        echo "El Mazda tiene " . $mazda->getRuedas() . " ruedas <br>";

        echo "El Mack tiene " . $mack->getRuedas() . " ruedas <br>";

        echo "El Mazda tiene un motor de " . $mazda->getMotor() . " cc. <br>";

    ?>
    
</body>
</html>