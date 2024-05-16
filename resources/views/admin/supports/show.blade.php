<h1>Detalhes da duvida</h1>

<ul>
    <li>{{ $support->subject }}</li>
    <li>
        @if ($support->status == 'a')
            Activo
        @elseif ($support->status == 'p')
            Pendente
        @else
            Cancelado
        @endif
    </li>
    <li>{{ $support->body }}</li>
</ul>