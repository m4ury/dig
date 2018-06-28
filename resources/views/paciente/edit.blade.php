@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Editar Paciente</div>
                    <div class="card-body">

                        @include('paciente.form', ['paciente' => $paciente, 'route' => [ 'paciente.update', $paciente->id ], 'method' => 'PATCH']);

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
