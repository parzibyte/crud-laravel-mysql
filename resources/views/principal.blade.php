<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titulo")</title>
    <style>
    /*
        Poner bordes a las tablas. Tomado de:
        https://parzibyte.me/blog/2018/10/16/tabla-html-bordes-css/
    */
    table {
        border-collapse: collapse;
    }
    
    table,
    th,
    td {
        border: 1px solid black;
    }
    
    th,
    td {
        padding: 5px;
    }
    </style>
</head>
<body>
    <a href="{{route('inicio')}}">Inicio</a>
    <a href="{{route('formAgregar')}}">Agregar</a>
    @yield("contenido")
    <hr>
    <p>
    CRUD de MySQL con Laravel. Creado por <a href="//parzibyte.me">parzibyte</a>
    </p>
</body>
</html>