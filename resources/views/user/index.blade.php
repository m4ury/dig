@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de Usuarios</h2>
        </div>
<div class="row">
    <a href="{{ route('user.create') }}" class="btn btn-primary btn-round" >Nuevo Usuario</a>
<div class="table">
    <table class="table table-striped">
    	<thead>
            <tr>
    		<th>Name</th>
            <th>Email</th>
            <th>Profesion</th>
            <th>Estado</th>
            <th>Creado</th>
            <th>modificado</th>
            <th>Opciones</th>

            </tr>
    	</thead>
    	<tbody>
    @foreach($user as $users)
            <tr>
              <td>{{ $users->name }}</td>
              <td>{{ $users->email }}</td>
              <td>{{ $users->profesion->nombre }}</td>
                @if($users->active == true)
              <td><span class="badge badge-success">Activo</span></td>
                    @else
                    <td><span class="badge badge-danger">Deshabilitado</span></td>
                @endif
              <td>{{ $users->created_at }}</td>
              <td>{{ $users->updated_at }}</td>

                <td class="td-actions text-right">


                    <form method="POST" action="{{ route('user.destroy', $users->id) }}">
                        {{ method_field('DELETE') }}
                        @csrf

                        <a href="{{ url('user/'. $users->id) }}" type="button" rel="tooltip"  title="View Profile" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </a>
                        <a href="{{ url('user/'.$users->id.'/edit') }}"  rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </a>

                        <button type="submit" rel="tooltip" title="Delete" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                        </button>

                    </form>
                </td>
            </tr>
    @endforeach
    	</tbody>
    </table>
        {{ $user->links() }}
</div>
</div>
    </div>
    @stop