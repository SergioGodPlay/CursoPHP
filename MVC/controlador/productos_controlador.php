<?php

    require_once("modelo/productos_modelo.php");

    //Al instanciar la clase ProductosModel estamos llamando al constructor
    $producto = new ProductosModel();

    $losProductos = $producto->getProductos();

    require_once("vista/productos_view.php");


?>