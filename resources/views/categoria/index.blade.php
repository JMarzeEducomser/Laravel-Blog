<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
    </head>

    <body>
        <h1>Lista de Categorías</h1>
        <hr/>
        <table style="border:1px solid black;">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
