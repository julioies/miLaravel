<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadores';
    //protected $primary_key = 'categoria_id';
    protected $fillable = ['nombre', 'edad', 'pais', 'resultado'];

    public function torneos()
    {
        return $this->belongsToMany(Torneo::class);
    }
}
