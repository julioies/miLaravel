<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeliculasController extends Controller
{


public function mostrar(){

    $datos=Articulo::latest()->paginate(2);

    return view('vista',compact('datos'));


}



public function insertar(){

    $articulo = Articulo::find(1);  //$escritor = App/Escritor::find(1);
    $articulo->titulo = 'Nuevo Laravel';     //$request->name;
    $articulo->save();

}


public function actualizar(){


    DB::table('articulos')
              ->where('id', 3)
              ->update(['titulo' => 'Estefania']);
}





}
