@auth    <!--sirve para mostrar en caso de estar autentificado, estar logeado-->
{{auth()->user()->name}}
{{dump(auth()->user())}}
@endauth

@guest
<a href="{{route('login')}}">Login</a>
@else
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
     @csrf
  </form>
@endguest

@forelse ($datos as $item)
<li>
{{$item->nombre}} {{$item->descripcion}}
     {{-- <a href="{{ route('editar', $item->id)}}" >Edit</a> <!--añadimos también EDITAR-->

     <form action="{{ route('borrar', $item->id)}}" method="post"> <!--añadimos también BORRAR-->
        @csrf
        @method('DELETE')
        <button type="submit">borrar</button>
    </form> --}}

</li>
@empty
   <li>NO HAY NADA </li>
@endforelse
