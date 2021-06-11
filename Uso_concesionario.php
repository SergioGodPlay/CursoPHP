<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");

	Compra_vehiculo::descuento_gobierno();

	//Cuando creamos una instancia de una Clase cada una tiene su copia de 
	//los atributos y los metodos
	$compra_Antonio = new Compra_vehiculo("compacto");

	//Cada vez que llamamos a un metodo solo se aplica para la instancia de 
	//la cual se aplica
	$compra_Antonio->climatizador();

	$compra_Antonio->tapiceria_cuero("blanco");

	echo "El precio final del coche de Antonio es: " . $compra_Antonio->precio_final() . "<br>";


	$compra_Maily = new Compra_vehiculo("compacto");

	$compra_Maily->climatizador();

	$compra_Maily->tapiceria_cuero("rojo");

	echo "El precio final del coche de Maily es: " . $compra_Maily->precio_final() . "<br>";

	echo date("d-m-y");


?>
</body>
</html>