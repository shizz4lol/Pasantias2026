<?php
session_start();
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
        <div id="header-izq">
            <div id="user-header">
                @if(isset($_SESSION['usuario']))
                    <p>Hola {{ $_SESSION['usuario'] }} !</p>
                @endif
            </div>
            <div id="logout-header">
                <button type="button" class="btn btn-outline-info"><a href="{{route ('logoutvista')}}">Cerrar sesión</a></button>
            </div>
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
                    <th>Modificaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                <tr>
                    <td><img src="{{$libro->Imagen}}" class="imagen"></td>
                    <td>{{$libro->Nombre}}</td>
                    <td>{{$libro->Autor}}</td>
                    <td>{{$libro->ISBN}}</td>
                    <td>
                        <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-primary"> Modificar</a><!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#alerta">Eliminar</button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="modal fade" id="alerta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="Eliminar">Desea borrar este libro?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <p>Esto sera permanente y no podra revertirlo.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    <div id="agregar">
        <button type="button" class="btn btn-primary"><a href="{{ route('libros.create') }}">Agregar</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>