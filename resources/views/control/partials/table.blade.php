<table class="table table-striped">
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Tipo Control</th>
        <th>Peso</th>
        <th>Talla</th>
        <th>RCV</th>
        <th>IMC</th>
        <th>Proximo Control</th>
    </tr>
    </thead>
    <tbody>
    @foreach($control as $controles)
        <tr>
            <td>{{ $controles->created_at->format('d-m-Y') }}</td>
            <td>{{ $controles->tipo_control }}</td>
            <td>{{ $controles->peso }}</td>
            <td>{{ $controles->talla }}</td>
            <td>{{ $controles->rcv }}</td>
            <td>{{ $controles->imc }}</td>
            <td>{{ $controles->proximo_control }}</td>
        </tr>
    @endforeach
    </tbody>
</table>