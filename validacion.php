
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