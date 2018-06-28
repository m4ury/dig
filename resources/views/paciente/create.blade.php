@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Nuevo Paciente</div>
                    <div class="card-body">

        @include('paciente.form', ['paciente' => $paciente, 'route' => 'paciente.store', 'method' => 'POST']);

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection