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
        }

        table{
            width: 30%;
            background-color: #ffc;
            border: 2px dotted #f00;
            margin: auto;
        }

        .izq{
            text-align: right;
        }

        .der{

            text-align: left;
        }

        td{
            text-align: center;
            padding: 10px;
        }

    </style>
</head>
<body>

    <h1>Introduce tus Datos</h1>

    <form action="comprueba_login.php" method="POST">
    
        <table>
        
            <tr>
                <td class="izq">
                    Usuario: 
                </td>

                <td class="der">
                    <input type="text" name="login">
                </td>
            
            </tr>

            <tr>
                <td class="izq">
                    Contraseña:
                </td>

                <td class="der">
                    <input type="password" name="password">
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="enviar" value="Ingresar">
                </td>
            </tr>
        </table>
    
    </form>
    
</body>
</html>