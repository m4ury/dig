@extends('layouts.app')

@section('content')
@foreach($control as $controls)

    {{ $controls }}
    <br>
    <br>
    @endforeach
@endsection