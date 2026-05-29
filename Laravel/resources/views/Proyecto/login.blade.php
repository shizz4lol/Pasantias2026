<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Libros</title>
</head>
<body>

<h1 class="text-primary">Control de Libros</h1>
<form action="{{ route('login.validar') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre"><br>
    <input type="password" name="password" placeholder="Contraseña"><br>
    <input type="submit">
</form>
<a href="{{ route('registro')}}"><p>NO TENGO CUENTA</p></a>
@if(session('error'))

    <p>{{ session('error') }}</p>

@endif
</body>
</html>