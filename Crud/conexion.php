<?php

    try{
        
        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

    }catch(Exception $e){

        echo "Se ha producido un error: " . $e->getMessage() . " en la linea " . $e->getLine();
    }


?>