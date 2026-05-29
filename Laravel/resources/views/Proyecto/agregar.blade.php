<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santuario de Letras</title>
    <link rel="stylesheet" href="{{ asset('css/agregar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <header>
        <div id="titulo-header">
            <h1>Santuario de Letras</h1>
        </div>
        <div id="logout-header">
            <button type="button" class="btn btn-outline-info"><a href="{{ route('logout') }}">Cerrar sesión</a></button>
        </div>
    </header>

    <div id="cuerpo">
        <h2>Agregar Libro</h2>

        <form>
            <label name="nombre">Nombre:</label><br/>
            <input type="text" name="nombre"><br/>

            <label name="autor">Autor:</label><br/>
            <input type="text" name="autor"><br/>

            <label name="isbn">ISBN:</label><br/>
            <input type="text" name="isbn"><br/>
            <br/>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>

        <br/>
        <button type="button" class="btn btn-outline-info"><a href="{{ route('inicio') }}">Cancelar</a></button>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>