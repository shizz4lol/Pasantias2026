<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santuario de Letras</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <div id="titulo">
        <h1>Santuario de Letras</h1>
    </div>

    <div id="registro">
        <h2>¡Bienvenido!</h2>

        <h3>Registro</h3>
        <form>
            <label name="nombre">Nombre:</label><br/>
            <input type="Text" name="nombre"><br/>

            <label name="email">Email:</label><br/>
            <input type="email" name="email"><br/>

            <label name="contraseña">Contraseña:</label><br/>
            <input type="password" name="contraseña"><br/>
            <br/>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <br/>
        <h3>¿Ya tienes una cuenta?<h3>
        <button type="button" class="btn btn-outline-info"><a href="{{ route('login') }}">Login</a></button>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>