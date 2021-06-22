<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Busqueda con PDO</title>
</head>
<body>


    <?php

    $busqueda_sec = $_POST["seccion"];

    $busqueda_porig = $_POST["p_orig"];

    try{

        $base = new PDO("mysql:host=localhost; dbname=pruebas","root","");

        //El metodo setAttribute establece un atributo (En este caso generamos
        //el objeto exception y dentro del catch mostramos el mensaje del error)
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE
                
                SECCIÓN = :secc AND PAÍSDEORIGEN = :porig";
        
        $resultado = $base->prepare($sql);

        $resultado->execute(array(":secc"=>$busqueda_sec, ":porig"=>$busqueda_porig));

        while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

            echo "Nombre del Articulo: " . $registro["NOMBREARTÍCULO"] . "<br>Seccion: " . 
            $registro["SECCIÓN"] . "<br>Precio: " . $registro["PRECIO"] . "<br> País de Origen: " .
            $registro["PAÍSDEORIGEN"] . "<br><br>";
        }

        $resultado->closeCursor();

    }catch(Exception $e){

        echo "Codigo del error : " . $e->getCode();

        //die("Error: " . $e->getMessage());

    }finally{

        $base = null;
    }

    ?>
    
</body>
</html>