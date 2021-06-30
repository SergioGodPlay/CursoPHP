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

        $nombre = $_POST["nombre"];

        $apellido = $_POST["apellido"];

        $destinatario = $_POST["email"];

        $telefono = $_POST["telefono"];

        $asunto = $_POST["asunto"];

        $texto_mail = $_POST["comentarios"];

        $headers = "MIME-VERSION: 1.0\r\n";

        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        $headers .= "From: Prueba Sergio < richardgodplay@gmail.com >\r\n";

        $exito = mail($destinatario, $asunto, $texto_mail, $headers);

        if($exito){

            echo "Se ha enviado el correo";

        }else{

            echo "No se ha podido enviar el correo";
        }

    ?>
    
</body>
</html>