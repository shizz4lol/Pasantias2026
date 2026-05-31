<?php
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Santuario de Letras</title>
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

        <div  id="titulo">
            <h1>Santuario de Letras</h1>
        </div>

        <div id="login">
            <h2>Login</h2>

            <form action="{{ route('login.validar') }}" method="POST">
            @csrf
                <label name="name-label">Nombre de usuario:</label><br/>
                <input type="text" name="name"><br/>

                <label name="contraseña-label">Contraseña:</label><br/>
                <input type="password" name="password"><br/>
                <br/>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
            @if(session('error'))

             <p id="error">{{ session('error') }}</p>

            @endif
            <h3>No tengo cuenta<h3>
            <button type="button" class="btn btn-outline-info"><a href="{{ route('registro') }}">Registrarme</a></button>
        </div>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>