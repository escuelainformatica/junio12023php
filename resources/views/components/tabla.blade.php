<table class="table" border="1">
    <thead class="text-light bg-dark">
        @if ($thead == '')
            <x-tabla-encabezado :columnas="$columnas" />
        @else
            {!! $thead !!}
        @endif
    </thead>
    <tbody>
        @if ($tbody == '')
            <x-tabla-cuerpo :contenido="$contenido" />
        @else
            {!! $tbody !!}
        @endif

    </tbody>
    <tfoot class="text-light bg-dark">
        @if ($tfoot == '')
            <x-tabla-pie :numfila="$numfila" :numcol="$numcol" contenido="este es el pie" />
        @else
            {!! $tfoot !!}
        @endif
    </tfoot>
</table>
