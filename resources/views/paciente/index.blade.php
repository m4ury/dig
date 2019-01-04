@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="py-5 text-center">
          <h2 class="title">Pacientes</h2>
      </div>
<div class="row">
<div class="table">
    <table class="table table-striped">
    	<thead>
            <tr>
    		<th>Rut</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Fecha Nacimiento</th>
            <th>Opciones</th>
            </tr>
    	</thead>
    	<tbody>
    @foreach($paciente as $pacientes)
            <tr>
              <td>{{ $pacientes->rut }}</td>
              <td>{{ $pacientes->nombres }}</td>
              <td>{{ $pacientes->apellidos }}</td>
              <td id="edad">{{ $pacientes->edad }}</td>
              <td>{{ $pacientes->sexo }}</td>
              <td id="fechaNacimiento">{{ $pacientes->fecha_nacimiento }}</td>

                <td class="td-actions pull-right" >

                    {!! Form::open(['route' => ['paciente.destroy', $pacientes->id], 'method' => 'DELETE']) !!}
                    @csrf
                    <a href="{{ url('paciente/'. $pacientes->id) }}" id="info" type="button" rel="tooltip"  title="View Profile" class="btn btn-info btn-simple btn-xs">
                        <i class="fas fa-user-check"></i>
                    </a>
                    <a href="{{ url('paciente/'.$pacientes->id.'/edit') }}"  rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-simple btn-xs', 'id' => 'delete'] ) !!}


                    {!! Form::close() !!}
                </td>
            </tr>
    @endforeach
    	</tbody>
    </table>
    <div class="form-group">
        <a id="new" class="btn btn-outline-primary" href="{{ route('paciente.create') }}">
            Nuevo <i class="fas fa-user-plus"></i>
        </a>
    </div>
    <div>
        {{ $paciente->links() }}
    </div>
</div>
</div>
</div>
@stop
