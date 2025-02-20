
@forelse ($datos as $dato)

        {{$dato->titulo}} -  {{$dato->created_at->diffForHumans()}}
        <br>
@empty


<h2>no hay nada</h2>
@endforelse

{{$datos->links()}}
