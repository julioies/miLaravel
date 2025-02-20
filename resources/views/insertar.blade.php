<form method="post" action="{{ route('almacenar') }}">

        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="nombre" value="{{old('nombre')}}"/>
        <!--ponemos old porque en el caso que carguemos el formulario y diera error habría que volver a introducir todos los campos, así recuerda o guarda los campos que están bien-->
     {!! $errors->first('nombre', '<small>:message</small><br>' )!!}  <!-- así especificamos los errores debajo-->

        <label for="price">Descripcion:</label>
        <input type="text" name="descripcion" value="{{old('descripcion')}}"/>
     {!! $errors->first('descripcion', '<small>:message</small><br>' )!!}


    <button type="submit">Crear</button>
</form>
