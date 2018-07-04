@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Nuevo control</div>
                    <div class="card-body">
                        @include('control.form', ['control' => $control, 'route' => 'control.store', 'method' => 'POST']);
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection