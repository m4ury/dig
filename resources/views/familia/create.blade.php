@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Nueva Familia</div>
                    <div class="card-body">

        @include('familia.form', ['familia' => $familia, 'route' => 'familia.store', 'method' => 'POST']);

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
