@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Nuevo Producto</h1>

        @include('product.form', ['product' => $product, 'route' => 'product.store', 'method' => 'POST']);

    </div>
    @endsection