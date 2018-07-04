{{ Form::open(['route' => $route, 'method' => $method]) }}
@csrf
<div class="form-group">
    {{ Form::text('tipo_control', $control->tipo_control, ['class' => 'form-control', 'placeholder' => 'Tipo Control', 'autofocus']) }}
</div>
<div class="form-group">
    {{ Form::number('peso', $control->peso, ['class' => 'form-control', 'placeholder' => 'Peso...', 'step' => 'any', 'id' => 'peso']) }}
</div>
<div class="form-group">
    {{ Form::number('talla', $control->talla, ['class' => 'form-control', 'placeholder' => 'Talla...', 'step' => 'any', 'id' => 'talla']) }}
</div>
<div class="form-group">
    {{ Form::number('imc', $control->imc, ['class' => 'form-control', 'placeholder' => 'IMC...', 'step' => 'any', 'id' => 'imc']) }}
</div>
<div class="form-group">
    {{  Form::select('rcv', ['bajo' => 'Bajo', 'medio' => 'Medio', 'alto' => 'Alto'], $control->rcv, ['class' => 'form-control', 'placeholder' => 'Riesgo Cardiovascular...']) }}
</div>
<div class="form-group">
    {{ Form::textarea('observacion', $control->observacion, ['class' => 'form-control', 'placeholder' => 'Observacion...']) }}
</div>
<div class="form-group">
    {{ Form::label('proximo_control', 'Fecha Prox. Control:') }}
    {{ Form::date('proximo_control', $control->proximo_control, ['class' => 'form-control']) }}
</div>
    {{ Form::hidden('paciente_id', $_GET['paciente_id']) }}

<div class="form-group text-center">
    {{ Form::submit('Enviar', ['class' => 'btn btn-success']) }}
    <a class="btn btn-secondary" href="{{ url('paciente') }}">Atras</a>
</div>
{{ Form::close() }}
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/test.js') }}"></script>
