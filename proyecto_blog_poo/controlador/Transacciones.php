<?php

    include_once("../modelo/Objeto_blog.php");

    include_once("../modelo/Manejo_objetos.php");

    try{

        $miconexion = new PDO("mysql:host=localhost; dbname=bbddblog", "root", "");

        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $miconexion->exec("SET CHARACTER SET utf8");

        if($_FILES["imagen"]["error"]){

            switch($_FILES["imagen"]["error"]){
    
                case 1:
    
                    echo "La imagen excede el tamaño permitido";
                    
                    break;
                    
                case 2:
    
                    echo "El tamaño del archivo excede 2 MB";
    
                    break;
    
                case 3:
    
                    echo "La imagen no se subio por completo";
    
                    break;
                    
                case 4:
    
                    echo "No se ha seleccionado ninguna imagen";
    
                    break;
            }
    
        }else{
    
            echo "Entrada de blog subida correctamente <br>";
                
             //Si no se ha producido ningun error al subir la imagen a la bbdd
            if((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK))){
    
                $destino_ruta = "../imagenes/";
    
                move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);
    
                echo "El archivo " . $_FILES["imagen"]["name"] . " se ha copiado en la carpeta de imagenes <br>";
    
            }else{
    
                echo "El archivo no se ha podido copiar a la carpeta de las imagenes <br>";
            }
        }

        //Establecemos la conexion con la bbdd
        $manejo_objetos = new Manejo_objetos($miconexion);

        $blog = new Objeto_blog();

        $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));

        date_default_timezone_set("America/Bogota");

        $blog->setFecha(date("Y-m-d H:i:s"));

        $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));

        $blog->setImagen($_FILES["imagen"]["name"]);

        $manejo_objetos->insertaContenido($blog);

        echo "Se ha agregado la entrada de blog con exito. <br><br>";

    }catch(Exception $e){

        die("Error: " . $e->getMessage());
    }

    



?>