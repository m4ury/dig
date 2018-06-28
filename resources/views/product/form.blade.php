{{ Form::open(['route' => $route, 'method' => $method]) }}
@csrf
<div class="form-group">
    {{ Form::text('title', $product->title, ['class' => 'form-control', 'placeholder' => 'Titulo...', 'autofocus']) }}
</div>
<div class="form-group">
    {{ Form::number('pricing', $product->pricing, ['class' => 'form-control', 'placeholder' => 'ingresa el precio del producto...']) }}
</div>
<div class="form-group">
    {{ Form::textarea('description', $product->description, ['class' => 'form-control', 'placeholder' => 'Describe tu producto...']) }}
</div>
<div class="form-group text-center">
    {{ Form::submit('Enviar', ['class' => 'btn btn-success']) }}
    <a class="btn btn-secondary" href="{{ url('product') }}">Atras</a>
</div>
{{ Form::close() }}