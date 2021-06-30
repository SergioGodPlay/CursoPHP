<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        h1{
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(236, 182, 3);
        }

        table{
            margin: auto;
            left: 0%;
            border: 2px solid blue;
            padding: 10px;
        }
    </style>

</head>
<body>

    <h1>Envio de Mails</h1>

    <form action="Enviar_mail.php" name="formulario_contacto" method="POST">
    
    
        <table width="500">

            <tr>
                <td>
                    <label for="nombre">Nombre: *</label>
                </td>

                <td>
                    <input type="text" name="nombre" size="25" maxlength="50" required> 
                </td>
            </tr>

            <tr>
                <td>
                    <label for="apellido">Apellido: *</label>
                </td>

                <td>
                    <input type="text" name="apellido" size="25" maxlength="50" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="email">Email: *</label>
                </td>

                <td>
                    <input type="text" name="email" size="25" maxlength="35" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="telefono">Telefono: </label>
                </td>

                <td>
                    <input type="text" name="telefono" size="25" maxlength="15">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="asunto">Asunto: *</label>
                </td>

                <td>
                    <input type="text" name="asunto" size="25" maxlength="50" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="coments">Comentarios: *</label>
                </td>

                <td>
                    <textarea name="comentarios" maxlength="500" cols="30" rows="5" required></textarea>
                </td>

            </tr>

            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Enviar">
                </td>

                
            </tr>
        </table>
    
    </form>
    
</body>
</html>