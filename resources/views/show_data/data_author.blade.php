mostrar datos de author
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>correro</th>
            <th>telefono</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $author as $author1)
        <tr>
            <td>{{ $author1->id }}</td>
            <td>{{ $author1->name }}</td>
            <td>{{ $author1->address }}</td>
            <td>{{ $author1->phone }}</td>
            <td>
                
            <a href="{{url('/author/'.$author1->id.'/edit')}}">Editar</a>
            |
            <form action="{{url('/author/'.$author1->id) }}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" 
            value="Borrar">
            </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
    <br>
    <a href="{{url('/author/data')}}">nuevo autor</a>
</table>