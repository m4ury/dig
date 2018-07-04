@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">

                <div class="card-header"><h3>Paciente: <strong>{{ $paciente->nombres }} {{ $paciente->apellidos }}</strong></h3></div>

                <div class="card-body">
                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Patologias
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">
                                @foreach($patologia as $patologias)
                                <ul>
                                    <li>
                                        <h4><span class="badge badge-pill badge-warning">{{ $patologias }}</span></h4>
                                    </li>
                                </ul>
                                @endforeach
                            </div>

                            <div class="form-group">
{{ Form::open() }}
                                {{  Form::select('patologia', $patologiasAll, null, ['class' => 'form-control', 'placeholder' => 'Seleccione Patologia...']) }}

                                <div class="py-2 text-lg-right">
                                    <a href="{{ route('patologia.update', ['paciente_id' => $paciente->id]) }}" class="btn btn-outline-success"><i class="fas fa-plus"></i></a>
                                </div>
{{ Form::close() }}
                            </div>
                        </div>
                    </div>

                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Complicaciones
                                    </a>
                                </h5>
                            </div>
                        </div>

                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">
                                @foreach($complicacion as $complicaciones)
                                <ul>
                                    <li>
                                       <h4>
                                        <span class="badge badge-pill badge-danger">{{ $complicaciones }}</span>
                                    </h4>
                                </li>
                            </ul>
                            @endforeach
                                    <div class="py-2 text-lg-right">
                                        <a href="{{ route('complicacion.create', ['paciente_id' => $paciente->id]) }}" class="btn btn-success"><i class="fas fa-plus"></i></a>
                                    </div>
                        </div>
                    </div>
                </div>

                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Ultimos Controles
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                    <div class="table">
                        @include('control.partials.table')
                        <div class="py-2 text-lg-right">
                            <a href="{{ route('control.create', ['paciente_id' => $paciente->id]) }}" class="btn btn-success"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                <div class="py-2">
                <a href="{{ route('paciente.index') }}" class="btn btn-secondary">Atras</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
