<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Busqueda</title>

    <style>

        table{
            width: 300px;
            margin: auto;
            background-color: #FFC;
            border: 2px solid red;
            padding: 5px;
        }

        td{
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="pagina_busqueda_pdo.php" method="POST">

        <table>

        <tr>
            <td>
                Seccion: 
            </td>
            
            <td><input type="text" name="seccion"></td>
        </tr>

        <tr>
            <td>Pais de Origen:</td> 
            
            <td><input type="text" name="p_orig"></td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" value="Buscar" name="enviando">
            </td>
        </tr>

        </table>

    </form>
   
</body>
</html>