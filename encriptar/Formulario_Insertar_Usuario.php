<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Registros</title>

    <style>
        h1{
            text-align: center;
            color: #00f;
            border-bottom: dotted #0000ff;
            width: 50%;
            margin: auto;

        }

        table{
            border: 2px solid red;
            padding: 20px 50px;
            margin-top: 50px;
            background-color: rgb(235, 235, 138);
        }

        body{
            background-color: #fc9;
        }

    </style>
</head>
<body>

    <h1>Registrarse</h1>

    <form action="pagina_insertar_usuarios.php" method="POST">

        <table border="0" align="center">

            <tr>
                <td>Usuario: </td>
                <td><label for="usuarioa"></label>
                <input type="text" name="usuario" id="usuario"></td>
            </tr>

            <tr>
                <td>Contraseña: </td>
                <td><label for="password"></label>
                <input type="password" name="password" id="password"></td>
            </tr>

            <tr>
                <td colspan="2" align="center" id="boton">
                    <input type="submit" name="enviar" id="enviar" value="Registrarse">
                </td>               
            </tr>
        </table>
    </form>
    
</body>
</html>