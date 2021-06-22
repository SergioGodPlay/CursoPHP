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

    $busqueda_cart = $_POST["c_art"];

    $busqueda_seccion = $_POST["seccion"];

    $busqueda_nart = $_POST["n_art"];

    $busqueda_precio = $_POST["precio"];

    $busqueda_fecha = $_POST["fecha"];

    $busqueda_importado = $_POST["importado"];

    $busqueda_porig = $_POST["pais_origen"];

    try{

        $base = new PDO("mysql:host=localhost; dbname=pruebas","root","");

        //El metodo setAttribute establece un atributo (En este caso generamos
        //el objeto exception y dentro del catch mostramos el mensaje del error)
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) 
        
                VALUES (:c_art, :secc, :n_art, :precio, :fecha, :importado, :p_orig)";
        
        $resultado = $base->prepare($sql);

        $resultado->execute(array(":c_art"=>$busqueda_cart, ":secc"=>$busqueda_seccion, ":n_art"=>$busqueda_nart, 
                            ":precio"=>$busqueda_precio, ":fecha"=>$busqueda_fecha, ":importado"=>$busqueda_importado,
                            ":p_orig"=>$busqueda_porig));

        /*while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

            echo "Nombre del Articulo: " . $registro["NOMBREARTÍCULO"] . "<br>Seccion: " . 
            $registro["SECCIÓN"] . "<br>Precio: " . $registro["PRECIO"] . "<br> País de Origen: " .
            $registro["PAÍSDEORIGEN"] . "<br><br>";
        }*/

        echo "Se ha insertado el registro exitosamente";

        $resultado->closeCursor();

    }catch(Exception $e){

        echo "Error : " . $e->getMessage();

        //die("Error: " . $e->getMessage());

    }finally{

        $base = null;
    }

    ?>
    
</body>
</html>