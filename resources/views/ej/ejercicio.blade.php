
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
