@extends("principal")
@section("titulo", "Agregar canción")

@section("contenido")
<h1>Agregar canción</h1>
<form method="POST" action="{{ route('agregarCancion') }}">
    @csrf
    <input autocomplete="off" required type="text" name="nombre" placeholder="Nombre de la canción">
    <br><br>
    <input autocomplete="off" required type="text" name="artista" placeholder="Artista que la canta">
    <br><br>
    <input autocomplete="off" required type="text" name="album" placeholder="Álbum">
    <br><br>
    <input autocomplete="off" required type="number" name="anio" placeholder="Año">
    <br><br>
    <input type="submit" value="Guardar">
</form>
@endsection