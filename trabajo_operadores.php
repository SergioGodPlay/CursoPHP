<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operadores de Comparacion</title>
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
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
      
      $edad = $_POST["edad_usuario"];

      if($usuario == "Sergio" && $edad >= 18){

          echo "<p class='validado'>Puedes entrar</p>";

      }else{

          echo "<p class=\"no_validado\">" . "No puedes entrar" . "</p>";
      }
    }


?>



</body>
</html>