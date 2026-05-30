<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santuario de Letras</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <header>
        <div id="titulo-header">
            <h1>Santuario de Letras</h1>
        </div>
        <div id="logout-header">
            <button type="button" class="btn btn-outline-info"><a href="{{route ('logout')}}">Cerrar sesión</a></button>
        </div>
    </header>

    <div id="cuerpo">
        <table class="table">
            <thead>
                <tr>
                    <th>Tapa</th>
                    <th>Nombre del libro</th>
                    <th>Autor</th>
                    <th>ISBN</th>
                    <th>Stock disponible</th>
                    <th>Modificaciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="" class="imagen"></td>
                    <td>El Aleph</td>
                    <td>Jorge Luis Borges</td>
                    <td>978-950-04-0000-1</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-primary"><a href="">Modificar</a></button>
                        <button type="button" class="btn btn-outline-info">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="agregar">
        <button type="button" class="btn btn-primary"><a href="">Agregar</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>