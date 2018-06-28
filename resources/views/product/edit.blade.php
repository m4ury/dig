@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Editando Producto</h1>

        @include('product.form', ['product' => $product, 'route' => [ 'product.update', $product->id ], 'method' => 'PUT']);

    </div>
@endsection