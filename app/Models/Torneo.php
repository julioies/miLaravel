<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $table = 'torneos';
    //protected $primary_key = 'categoria_id';
    protected $fillable = ['nombre', 'localizacion'];

    public function jugadores()
    {
        return $this->belongsToMany(Jugador::class);
    }
}
