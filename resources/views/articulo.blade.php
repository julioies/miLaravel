<link rel="stylesheet" href="./estilos.css">
<form method="post" action="{{ route('articulos') }}">
    @csrf

<select name="id">

    @forelse ($datos as $dato)
        <option value="{{ $dato->id }}">{{ $dato->nombre }}</option>

    @empty

    @endforelse
</select>

    <button type="submit">seleccionar</button>
</form>

<h2>prueba</h2>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
</body>
</html>

