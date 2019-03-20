@extends("principal")
@section("titulo", "Editar canción")

@section("contenido")
<h1>Editar canción</h1>
<form method="POST" action="{{ route('guardarCambiosDeCancion') }}">
    @csrf
    <input value="{{ $cancion->id }}" type="hidden" name="idCancion">
    <input autocomplete="off" required value="{{ $cancion->nombre }}" type="text" name="nombre" placeholder="Nombre de la canción">
    <br><br>
    <input autocomplete="off" required value="{{ $cancion->artista }}" type="text" name="artista" placeholder="Artista que la canta">
    <br><br>
    <input autocomplete="off" required value="{{ $cancion->album }}" type="text" name="album" placeholder="Álbum">
    <br><br>
    <input autocomplete="off" required value="{{ $cancion->anio }}" type="number" name="anio" placeholder="Año">
    <br><br>
    <input type="submit" value="Guardar">
</form>
@endsection
