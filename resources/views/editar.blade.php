@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="post" action="{{ route('actualizar', $dato) }}">
          <div>
              @method('PATCH')
              @csrf

              <label for="name">nombre:</label>
              <input type="text"  name="nombre" value="{{ $dato->nombre }}"/>
          </div>
          <div >
              <label for="descripcion">descripcion</label>
              <input type="text"  name="descripcion" value="{{ $dato->descripcion }}"/>
          </div>

          <button type="submit" >Actualizar</button>
      </form>
  </div>
</div>
