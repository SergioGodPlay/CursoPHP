<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operadores de Comparacion</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
    text-align: center;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
    text-align:center;
	}


</style>
</head>

<body>
<h1>USANDO CONDICIONALES</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Contraseña:</td>
      <td><label for="password"></label>
      <input type="text" name="password" id="password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>

<?php

    //Si se ha pulsado el boton de enviar
    if(isset($_POST["enviando"])){

        //Almacenamos dentro de la variable usuario lo que se guardo en el cuadro de texto del Nombre
        $usuario = $_POST["nombre_usuario"];
      
        $password = $_POST["password"];

        switch(true){

            case $usuario == "Sergio" && $password == "12345":
              
                echo "<p class='validado'>Usuario autorizado. Hola Sergio</p>";

                //Si no ponemos el break se seguiran evaluando las demas condiciones de
                //los demas case
                break;
            case $usuario == "Katie" && $password == "1994":

                echo "<p class='validado'>Usuario autorizado. Hola Katie</p>";

                break;

            case $usuario == "Alejandra" && $password == "54321":

                echo "<p class='validado'>Usuario autorizado. Hola Alejandra</p>";

                break;
            
            default:

                echo "Usuario no autorizado";
        }

        /*if($edad <= 18){

            echo "<p class='validado'>Eres menor de edad</p>";

        }else{

            echo "Eres mayor de edad. Puedes acceder";
        }*/
        
        //Operador Ternario
        //$resultado = $edad <= 18 ? "Eres menor de edad. No puedes acceder" : 
        //"Eres mayor de edad";

        //Podemos incluir los operadores logicos para evaluar mas de una condicion
        //$resultado = $usuario == "Sergio" && $password == "12345" ? "Puedes Ingresar":
        //"No puedes Ingresar";

        //echo $resultado;
    }


?>



</body>
</html>