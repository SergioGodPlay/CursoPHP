<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagenes</title>

    <style>

        table{
            margin: auto;
            border: 2px dotted red;
            width: 450px;
        }
    </style>

</head>
<body>

    <form action="datosImagen.php" method="POST" enctype="multipart/form-data">

        <table>

            <tr>
                <td>
                    <label for="imagen">Imagen:</label>
                </td>

                <td>
                    <input type="file" name="imagen" size="20">
                </td>
            </tr>

            <br>

            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="enviar" value="Enviar Imagen">
                </td>
            </tr>
        </table>
    
    </form>
    
</body>
</html>