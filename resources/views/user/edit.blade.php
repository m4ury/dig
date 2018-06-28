@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Editar Usuario</div>

                    @if(session()->has('info'))
                        <div class="alert alert-success">{{ session('info') }}</div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombres" class="col-md-4 col-form-label text-md-right">Nombres</label>

                                <div class="col-md-6">
                                    <input id="nombres" type="text" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" value="{{ $user->nombres }}" required>

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
                                    <input id="apellidos" type="text" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ $user->apellidos }}" required>

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
                                        <option>Seleccione...</option>
                                        <option value="{{ $user->sexo }}" selected="">{{ $user->sexo }}</option>
                                        <option value="Femenino" >Femenino</option>
                                        <option value="Masculino" >Masculino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>

                                <div class="col-md-6">
                                    <input id="edad" type="number" class="form-control{{ $errors->has('edad') ? ' is-invalid' : '' }}" name="edad" value="{{ $user->edad }}" required>

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
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection