<link rel="stylesheet" href="./estilos.css">

<form action="{{route('recuEjercicio')}}" method="post">
    @csrf

            <select name="id" id="cars">

                @forelse ($torneos as $torneo )
                <option value="{{$torneo->id}}">{{$torneo->nombre}}</option>

                @empty
                no  hay datos
                @endforelse

            </select>


    <button type="submit" value="enviar">enviar</button>

</form>

<main class="container">
    <div class="row">
        <div class="col-2">dfrfref</div>
    </div>

</main>



<a href="{{route('mostrarEjercicio')}}">mostrarEjercicio</a>

<ul>

    @forelse ($jugadores as $jugador)
        <li>
            {{ $jugador->nombre }}
            {{ $jugador->pais }}
        </li>
    @empty
        vacio
    @endforelse

</ul>
