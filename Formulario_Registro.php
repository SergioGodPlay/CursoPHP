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
            color: #00f;
            border-bottom: dotted #0000ff;
            width: 50%;
            margin: auto;

        }

        table{
            border: 1px solid ;
            padding: 20px 50px;
            margin-top: 50px;
        }

        body{
            background-color: #ffc;
        }

        #filabotones{
            text-align: center;
        }
        
    </style>
</head>
<body>

    <h1>Registro de Articulos</h1>

    <form action="Insertar_registro.php" method="GET">

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
                <td>
                    <p></p>
                </td>
            </tr>

            <tr id="filabotones">
                <td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
                <td><input type="reset" value="Borrar"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>