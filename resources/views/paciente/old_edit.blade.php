<form method="POST" action="{{ route('paciente.update', $paciente->id) }}">
    @csrf
    {{ method_field('PUT') }}

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Rut</label>

        <div class="col-md-6">
            <input id="rut" type="text" class="form-control {{ $errors->has('rut') ? ' is-invalid' : '' }}" name="rut" value="{{ $paciente->rut }}" required autofocus>

            @if ($errors->has('rut'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="nombres" class="col-md-4 col-form-label text-md-right">Nombres</label>

        <div class="col-md-6">
            <input id="nombres" type="text" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" value="{{ $paciente->nombres }}" required>

            @if ($errors->has('nombres'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="apellidos" class="col-md-4 col-form-label text-md-right">Apellidos</label>

        <div class="col-md-6">
            <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ $paciente->apellidos }}" required>

            @if ($errors->has('apellidos'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo</label>
        <div class="col-md-6">
            <select class="form-control m-bot15" name="sexo">
                <option value="">Seleccione...</option>
                <option value="Femenino" {{ $paciente->sexo == 'Femenino' ? 'selected': '' }}>Femenino</option>
                <option value="Masculino" {{ $paciente->sexo == 'Masculino' ? 'selected': '' }}>Masculino</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="establecimiento" class="col-md-4 col-form-label text-md-right">Establecimiento</label>
        <div class="col-md-6">
            @foreach($establecimiento as $establecimientos => $id)
            <input
                type="checkbox"
                value="{{ $id }}"
                {{ $paciente->establecimiento()->pluck('id')->contains($id) ? 'checked' : '' }}
            name="establecimiento">
            {{ $establecimientos }}
            @endforeach
        </div>
    </div>

    <div class="form-group row">
        <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>

        <div class="col-md-6">
            <input id="edad" type="number" class="form-control{{ $errors->has('edad') ? ' is-invalid' : '' }}" name="edad" value="{{ $paciente->edad }}" required>

            @if ($errors->has('edad'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
            <a href="{{ route('paciente.index') }}" class="btn btn-secondary">
                Atras
            </a>
        </div>
    </div>
</form>