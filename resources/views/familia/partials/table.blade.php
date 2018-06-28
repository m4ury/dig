<table class="table table-striped">
    <thead>
    <tr>
        <th>Rut</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Fecha Nacimiento</th>
        <th>Jefe Familia</th>

    </tr>
    </thead>
    <tbody>
    @foreach($pacientes as $paciente)
        <tr>
            <td>{{ $paciente->rut }}</td>
            <td>{{ $paciente->nombres }}</td>
            <td>{{ $paciente->apellidos }}</td>
            <td>{{ $paciente->edad }}</td>
            <td>{{ $paciente->sexo }}</td>
            <td>{{ $paciente->fecha_nacimiento }}</td>
            <td>
                @if($paciente->jefe_familia == 1)
                    <a href="#" class="px-3"  title="Jefe De Familia"><i class="fas fa-key"></i></a>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
