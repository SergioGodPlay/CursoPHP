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

        $alimentos = array("Fruta" => array("tropical"=>"kiwi",
                                           "citrico"=>"Naranja",
                                           "otros"=>"Manzana"), 
                            
                           "Leche" => array("animal"=>"vaca",
                                           "vegetal"=>"coco"), 

                           "Carne" => array("vacuno"=>"lomo",
                                           "porcino"=>"pata"));

        
        //echo $alimentos["Fruta"]["tropical"]; 
        
        foreach($alimentos as $clave_alim => $alim){

            echo "$clave_alim : <br>";

            /*while(list($clave, $valor) = each($alim)){

                echo "$clave = $valor <br>";
            }*/

            echo "<br>";
        }

        echo var_dump($alimentos);

    ?>
    
</body>
</html>