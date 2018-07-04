@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2 class="title">Familias</h2>
        </div>
<div class="row">
<div class="table">
    <table class="table table-striped">
    	<thead>
            <tr>
            <th>Nombres</th>
            <th>tipo_familia</th>
            <th>etapa_ciclo_vital</th>
            <th>sector</th>
            <th>direccion</th>
            <th>Opciones</th>
            </tr>
    	</thead>
    	<tbody>
    @foreach($familia as $familias)
            <tr>
              <td>{{ $familias->nombre }}</td>
              <td>{{ $familias->tipo_familia }}</td>
              <td>{{ $familias->etapa_ciclo_vital }}</td>
              <td>{{ $familias->sector }}</td>
              <td>{{ $familias->direccion }}</td>

                <td class="td-actions pull-right">

                    <form method="POST" action="{{ route('familia.destroy', $familias->id) }}">
                        {{ method_field('DELETE') }}
                        @csrf

                        <a href="{{ url('familia/'. $familias->id) }}" type="button" rel="tooltip"  title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fas fa-user-check"></i>
                        </a>
                        <a href="{{ url('familia/'.$familias->id.'/edit') }}"  rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </a>

                        <button id="delete" type="submit" rel="tooltip" title="Delete" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>

                    </form>
                </td>
            </tr>
    @endforeach
    	</tbody>
    </table>
    <div class="form-group">
        <a id="new" class="btn btn-outline-primary" href="{{ route('familia.create') }}">
            Nuevo <i class="fas fa-users"></i>
        </a>
    </div>
    <div>
        {{ $familia->links() }}
    </div>
      </div>
</div>
    </div>
    @stop
