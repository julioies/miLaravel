<ul>
    @forelse ($categorias as $categoria )
    <li>
        {{$categoria->nombre}}
        {{$categoria->articulos}}

    </li>
    @empty
        <h2>NO HAY NADA</h2>
    @endforelse

    </ul>
