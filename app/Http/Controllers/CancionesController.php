<?php

namespace App\Http\Controllers;

/*
    Si no sabes de dónde viene el nombre de las
    tablas y en dónde estamos confugrando las credenciales
    mira el archivo .env y database/esquema.sql

    También echa un vistazo a las migraciones
*/

# Queremos acceder a la petición HTTP
use Illuminate\Http\Request;

# También queremos al modelo Cancion
use App\Cancion;


class CancionesController extends Controller
{

    // Devolver la vista con todas las canciones
    public function index()
    {
        $canciones = Cancion::get();

        return view("inicio")
            ->with("canciones", $canciones);
    }
    

    public function agregarCancion(Request $peticion)
    {

        # Crear un modelo...
        $cancion = new Cancion;

        # Establecer propiedades leídas del formulario
        $cancion->nombre = $peticion->nombre;
        $cancion->artista = $peticion->artista;
        $cancion->album = $peticion->album;
        $cancion->anio = $peticion->anio;
       
        # Y guardar modelo ;)
        $cancion->save();
        /*
        Ahora redirige a la ruta con el nombre
        inicio (mira routes/web.php) y pásale
        un mensaje en la variable "mensaje" con
        el valor de "Canción agregada"
         */
        return redirect()
            ->route('inicio')
            ->with('mensaje', 'Canción agregada');
    }

    public function guardarCambiosDeCancion(Request $peticion)
    {
        # El id para el where de SQL
        $idCancionQueSeActualiza = $peticion->idCancion;
        # Obtener modelo fresco de la base de datos
        # Buscar o fallar
        $cancion = Cancion::findOrFail($idCancionQueSeActualiza);
        # Los nuevos datos
        $cancion->nombre = $peticion->nombre;
        $cancion->artista = $peticion->artista;
        $cancion->album = $peticion->album;
        $cancion->anio = $peticion->anio;
        # Y guardamos ;)
        $cancion->save();
        
        /*
        Ahora redirige a la ruta con el nombre
        inicio (mira routes/web.php) y pásale
        un mensaje en la variable "mensaje" con
        el valor de "Canción actualizada"
         */
        return redirect()
            ->route('inicio')
            ->with('mensaje', 'Canción actualizada');

    }

    public function editarCancion(Request $peticion)
    {
        $idCancion = $peticion->route("id");
        # Obtener canción por ID o fallar, es decir, mostrar un 404
        $cancion = Cancion::findOrFail($idCancion);
        return view("editar_cancion")
            ->with("cancion", $cancion);
    }

    public function eliminarCancion(Request $peticion)
    {
        # El id para el where de SQL
        $idCancionQueSeElimina = $peticion->route("id");
        # Obtener canción o mostrar 404
        $cancion = Cancion::findOrFail($idCancionQueSeElimina);
        # Eliminar
        $cancion->delete();
        /*
        Ahora redirige a la ruta con el nombre
        inicio (mira routes/web.php) y pásale
        un mensaje en la variable "mensaje" con
        el valor de "Canción eliminada"
         */
        return redirect()
            ->route('inicio')
            ->with('mensaje', 'Canción eliminada');
    }
}
