@extends('layouts.app')
    @section('content')
        <div class="big-padding text-center blue-grey white-text">
            <h1>Productos</h1>
        </div>
        <div class="container">
            @if(session()->has('info'))
                <div id="alert" class="alert alert-success text-center"><strong>{{ session('info') }}</strong></div>
            @elseif(session()->has('danger'))
                <div id="alert" class="alert alert-danger text-center"><strong>{{ session('danger') }}</strong></div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Pricing</td>
                        <td class="text-center" colspan="3">Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $products)
                        <tr>
                            <td>{{ $products->id }}</td>
                            <td>{{ $products->title }}</td>
                            <td>{{ $products->description }}</td>
                            <td>{{ $products->pricing }}</td>
                            <td class="td-actions text-right" >

                                {{ Form::open(['route' => ['product.destroy', $products->id], 'method' => 'DELETE']) }}
                                    @csrf
                                    <a href="{{ url('product/'. $products->id) }}" type="button" rel="tooltip"  title="View Profile" class="btn btn-info btn-simple btn-xs">
                                        <i class="fas fa-user-check"></i>
                                    </a>
                                    <a href="{{ url('product/'.$products->id.'/edit') }}"  rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                {{ Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-simple btn-xs', 'id' => 'delete'] )  }}

                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-success" href="{{ route('product.create') }}">
                    Nuevo <i class="fas fa-plus-circle"></i>
                </a>
            </div>
            <div class="form-group">
                <hr>
                {{ $product->links() }}
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.alert').alert('open');
                setTimeout(function () {
                    $('.alert').alert('close');
                },1500);
            });
        </script>
        @stop