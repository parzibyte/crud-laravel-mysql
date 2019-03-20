<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    # Por defecto Laravel tomaría "cancion" así que mejor indicamos el nombre
    protected $table = "canciones";
    # No queremos que ponga updated_at ni created_at
    public $timestamps = false;
}
