<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Articulo;
use App\Models\Jugador;
use App\Models\Torneo;

use Illuminate\Http\Request;

class RelacionController extends Controller
{

    public function recuEjercicio(Request $request){



        $torneo=$request->validate([
            'id'=>'required|max:45',
        ]);

        /*Todos los torneos */
        $torneos=Torneo::all();


        /*Relación muchos a muchos */
        $torneo = Torneo::find($torneo["id"]);
        $jugadores = $torneo->jugadores;

        return view('ej.jugadores',['jugadores'=>$jugadores,'torneos'=>$torneos]);



    }


    public function  mostrarEjercicio(){

            $torneos=Torneo::all();



            return view('ej.ejercicio',['torneos'=>$torneos]);



    }




    public  function  mostrarTorneos(){

        $torneo=Torneo::find(1);
        $jugador = Jugador::find(2);
        $torneo->jugadores()->attach($jugador);
        // $jugador->torneos()->attach($torneo);


    }






        public function articulos(Request $request){

            $datos=request()->validate([
                'id'=>'required']
            );


            dump($datos["id"]);
            $categoria=Categoria::find($datos["id"]);
            $articulos = $categoria->articulos;

            return view('mostrararticulos',['articulos'=>$articulos]);

         //   dump($articulos);



        }


    public function mostrarArticulos(){


        $Categoria = Categoria::find(1);
$Categoria->delete();

        // $datos=Categoria::all();

        // return view('articulo',['datos'=>$datos]);
        // //return view('articulo',compact('datos'));

    }


    public function mostrarCategorias()
    {

        // $categorias = Categoria::with('articulos')->get();

        // $categorias=Categoria::with('articulos')->where('nombre', 'futbol')->get();
        // dump($categorias->toArray());


        // $articulos = Articulo::with('categoria')->get();
        // dump($articulos->toArray());

        // foreach ($articulos as $articulo) {
        //    echo $articulo->categoria->nombre;
        // }


        $articulo=Articulo::find(3);
        $categoria = $articulo->categoria;

        dump($categoria->toArray());


        // return view('relacion',compact('categorias'));

    }




}
