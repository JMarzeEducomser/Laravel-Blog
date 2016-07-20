<!DOCTYPE html>
<html>
    <head>
        <title>Reporte</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width:device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
    </head>

    <style>
        h1{color: blue;}
        h2{color: cyan;}
        table{
            width: 100%;
            border: 1px solid black;
        }
    </style>

    <body>
        <h1>Post: <i>{{ $post->titulo }}</i></h1>
        <h2>Código: <i>{{ $post->codigo }}</i></h2>
        <hr/>
        <table>
            <tr>
                <th>Contenido del Post</th>
                <th>Categoría</th>
                <th>Fecha de creación</th>
                <th>Fecha de última modificación</th>
            </tr>

            <tr>
                <td>{{ $post->contenido }}</td>
                <td>{{ $post->categoria->nombre }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
        </table>
    </body>
</html>
