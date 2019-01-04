{{ Form::open(['route' => $route, 'method' => $method]) }}
@csrf
<div class="form-group">
    {{ Form::text('rut', $paciente->rut, ['class' => 'form-control'.($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo: 19 999 999-k', 'autofocus' ]) }}
    @if ($errors->has('rut'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('rut') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
    {{ Form::text('nombres', $paciente->nombres, ['class' => 'form-control'.($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Sus nombres...']) }}
    @if ($errors->has('nombres'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('nombres') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
    {{ Form::text('apellidos', $paciente->apellidos, ['class' => 'form-control'.($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Sus apellidos...']) }}
    @if ($errors->has('apellidos'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('apellidos') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
    {{ Form::text('direccion', $paciente->direccion, ['class' => 'form-control'.($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Su direccion...']) }}
    @if ($errors->has('direccion'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('direccion') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
    {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control', 'placeholder' => 'Su telefono...']) }}
</div>
<div class="form-group">
    {{  Form::select('sector', ['Celeste' => 'Celeste', 'Naranjo' => 'Blanco', 'Blanco' => 'Naranjo'], $paciente->sector, ['class' => 'form-control'.($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Sector...']) }}
    @if ($errors->has('sector'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('sector') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
    {{  Form::select('sexo', ['masculino' => 'Masculino', 'femenino' => 'Femenino', 'compañeres' => 'Compañeres'], $paciente->sexo, ['class' => 'form-control'.($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Indique su sexo...', 'value' => old('sexo')]) }}
    @if ($errors->has('sexo'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('sexo') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
    {{ Form::number('edad', $paciente->edad, ['class' => 'form-control'.($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Su edad...']) }}
    @if ($errors->has('edad'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('edad') }}</strong>
      </span>
    @endif
</div>
<div class="form-group">
    {{ Form::label('fecha_nacimiento', 'Fecha Nacimiento:') }}
    {{ Form::date('fecha_nacimiento', $paciente->fecha_nacimiento, ['class' => 'form-control']) }}
</div>

<div class="form-group text-center">
    {{ Form::submit('Enviar', ['class' => 'btn btn-success']) }}
    <a class="btn btn-secondary" href="{{ url('paciente') }}">Atras</a>
</div>
{{ Form::close() }}

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/test.js') }}"></script>
