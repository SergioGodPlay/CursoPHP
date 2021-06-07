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

        //$num1 = rand(0, 100);

        //$num1 = pow(5,3);

        $num1 = "5";

        $resultado = (int) $num1;

        //Conversion implicita a integer
        //$num1 += 2;

        //Conversion implicita a double
        //$num1 += 5.75;

        echo "El numero es " . $resultado . "<br>";

        echo gettype($resultado);
    ?>
    
</body>
</html>