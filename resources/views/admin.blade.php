@guest
    <a href="{{ route('login') }}">Login</a>
@else
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endguest

<h1>ADMIN</h1>

@auth <!--sirve para mostrar en caso de estar autentificado, estar logeado-->
    {{ dump(auth()->user()->name) }}
    {{ dump(auth()->user()->role) }}
@endauth
