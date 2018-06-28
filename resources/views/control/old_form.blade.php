<form method="POST" action="{{ route('control.store') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Tipo Control</label>

        <div class="col-md-6">
            <input id="tipo_control" type="text" class="form-control{{ $errors->has('tipo_control') ? ' is-invalid' : '' }}" name="tipo_control" value="{{ old('tipo_control') }}" autofocus>
            @if ($errors->has('tipo_control'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('tipo_control') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="peso" class="col-md-4 col-form-label text-md-right">Peso</label>

        <div class="col-md-6">
            <input id="peso" type="number" step="any" class="form-control{{ $errors->has('peso') ? ' is-invalid' : '' }}" name="peso" value="{{ old('peso') }}">

            @if ($errors->has('peso'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('peso') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="talla" class="col-md-4 col-form-label text-md-right">Talla</label>

        <div class="col-md-6">
            <input id="talla" type="text" step="any" class="form-control{{ $errors->has('talla') ? ' is-invalid' : '' }}" name="talla" value="{{ old('talla') }}">

            @if ($errors->has('talla'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('talla') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="rcv" class="col-md-4 col-form-label text-md-right">Riesgo Cardiovascular</label>
        <div class="col-md-6">
            <select id="rcv" class="form-control" name="rcv">
                <option value="">Seleccione...</option>
                <option value="Bajo" >Bajo</option>
                <option value="Medio" >Medio</option>
                <option value="Alto" >Alto</option>
            </select>
        </div>
    </div>

    {{--<div class="form-group row">
        <label for="imc" class="col-md-4 col-form-label text-md-right">IMC</label>

        <div class="col-md-6">
            <input id="imc" type="number" class="form-control{{ $errors->has('imc') ? ' is-invalid' : '' }}" name="imc" value="{{ old('imc') }}">

            @if ($errors->has('imc'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('imc') }}</strong>
                                    </span>
            @endif
        </div>
    </div>--}}

    {{--<div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-success">
                Register
            </button>
            <a href="{{ route('control.index') }}" class="btn btn-secondary">
                Atras
            </a>
        </div>
    </div>--}}
</form>

<body>
</body>
