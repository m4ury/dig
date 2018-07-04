@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header"><h3>Familia: <strong>{{ $familias->nombre }} {{ $familias->apellidos }}</strong></h3></div>
                <div class="card-body">
                  @include('familia.partials.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection