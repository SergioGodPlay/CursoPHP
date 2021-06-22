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
            border: 1px solid black;
            padding: 20px 50px;
            margin-top: 50px;
            background-color: rgb(235, 235, 138);
        }

        body{
            background-color: #fc9;
        }

        #filabotones{
            text-align: center;
        }
        
    </style>
</head>
<body>

    <h1>Insertar Registros</h1>

    <form action="pagina_eliminar_pdo.php" method="POST">

        <table border="0" align="center">

            <tr>
                <td>Codigo Artículo: </td>
                <td><label for="c_art"></label>
                <input type="text" name="c_art" id="c_art"></td>
            </tr>

            <tr>
                <td>Seccion: </td>
                <td><label for="seccion"></label>
                <input type="text" name="seccion" id="seccion"></td>
            </tr>

            <tr>
                <td>Nombre Artículo: </td>
                <td><label for="n_art"></label>
                <input type="text" name="n_art" id="n_art"></td>
            </tr>

            <tr>
                <td>Precio: </td>
                <td><label for="precio"></label>
                <input type="text" name="precio" id="precio"></td>
            </tr>

            <tr>
                <td>Fecha: </td>
                <td><label for="fecha"></label>
                <input type="text" name="fecha" id="fecha"></td>
            </tr>

            <tr>
                <td>Importado: </td>
                <td><label for="importado"></label>
                <input type="text" name="importado" id="importado"></td>
            </tr>

            <tr>
                <td>Pais de Origen: </td>
                <td><label for="pais_origen"></label>
                <input type="text" name="pais_origen" id="pais_origen"></td>
            </tr>

            <tr>
                <td colspan="2" align="center" id="boton">
                    <input type="submit" name="enviar" id="enviar" value="Insertar">
                </td>
                
            </tr>
        </table>
    </form>
    
</body>
</html>