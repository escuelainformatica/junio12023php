@if (count($contenido) === 0)
    <tr>
        <td><i>Sin contenido</i></td>
    </tr>
@else
    @foreach ($contenido as $fila)
        <x-tabla-fila :fila="$fila" />
    @endforeach
@endif
