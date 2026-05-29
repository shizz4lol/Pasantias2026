<?php
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Santuario de Letras</title>
       <link rel="stylesheet" href="{{ asset('css/logout.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

       <header>
        <div id="titulo-header">
            <h1>Santuario de Letras</h1>
        </div>
    </header>

        <div id="logout">
            <h2>¿Seguro de que deseas cerrar la sesión?</h2><br/>

            <button type="button" class="btn btn-outline-info">Cerrar sesión</button><br/>
            <button type="button" class="btn btn-outline-info"><a href="{{ route('inicio') }}">Cancelar</a></button>
        </div>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
    </html>