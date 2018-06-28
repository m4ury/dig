@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Perfil de {{ $paciente->nombres }} </div>

                    <div class="card-body">
                    {{ $paciente->rut }}
                    {{ $paciente->nombres }}
                    {{ $paciente->apellidos }}
                        {{ $paciente->sexo }}
                        {{ $paciente->edad }}

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection