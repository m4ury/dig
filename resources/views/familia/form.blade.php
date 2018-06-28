{{ Form::open(['route' => $route, 'method' => $method]) }}
@csrf
<div class="form-group">
    {{ Form::text('nombre', $familia->nombre, ['class' => 'form-control', 'placeholder' => 'Ingrese Apellidos de La Familia', 'autofocus']) }}
</div>
<div class="form-group">
    {{  Form::select('tipo_familia', ['Nuclear' => 'Nuclear', 'Nuclear-Biparental' => 'Nuclear-Biparental', 'Nuclear-MonoParental' => 'Nuclear-MonoParental', 'Reconstituida' => 'Reconstituida', 'Extendida' => 'Extendida', 'Unipersonal' => 'Unipersonal'], $familia->tipo_familia, ['class' => 'form-control', 'placeholder' => 'Tipo de Familia...']) }}
</div>
<div class="form-group">
    {{  Form::select('etapa_ciclo_vital', ['Formacion de Pareja' => 'Formacion de Pareja', 'Crianza inicial' => 'Crianza inicial', 'Con hijos pre-escolares' => 'Con hijos pre-escolares', 'Con hijos escolares' => 'Con hijos escolares', 'Con hijos adolecentes' => 'Con hijos adolecentes', 'Plataforma de lanzamiento' => 'Plataforma de lanzamiento', 'Nido vacio' => 'Nido vacio', 'Etapa de disolucion' => 'Etapa de disolucion'], $familia->etapa_ciclo_vital, ['class' => 'form-control', 'placeholder' => 'Indique etapa ciclo vital...']) }}
</div>
<div class="form-group">
    {{  Form::select('sector', ['Celeste' => 'Celeste', 'Naranjo' => 'Blanco', 'Blanco' => 'Naranjo'], $familia->sector, ['class' => 'form-control', 'placeholder' => 'Sector...']) }}
</div>
<div class="form-group">
    {{ Form::text('direccion', $familia->direccion, ['class' => 'form-control', 'placeholder' => 'Su direccion...']) }}
</div>

<div class="form-group text-center">
    {{ Form::submit('Enviar', ['class' => 'btn btn-success']) }}
    <a class="btn btn-secondary" href="{{ url('familia') }}">Atras</a>
</div>
{{ Form::close() }}
