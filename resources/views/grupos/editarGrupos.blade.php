@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="background-color: #1B396A; color: white;">{{ __('Actualizar Grupo:') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update.grupos',$grupos->id) }}">
                    @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="##" class="col-md-4 col-form-label text-md-end">{{ __('Clase:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="clase" aria-label="Default select example">
                                  <option selected>Seleccione la clase</option>
                                  @foreach ($clases as $clase)
                                  <option value="{{$clase->id}}">
                                 {{$clase->docente->usuario->name}} - {{$clase->horario->hora_ini}} - {{$clase->horario->hora_term}}
                                  </option>
                                  @endforeach
                                </select>                                
                    </div></div>
                    <div class="row mb-3">
                     <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Identificador de Grupo:') }}</label>
                     <div class="col-md-6">
                     <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="descripcion" 
                                                value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" rols="alert"><strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div></div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Actualizar') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('index.grupos')}}" class="center" style="background-color: #1B396A">Regresar a Lista</a></td>
                            </div>
                        </di
                    </form>
                </div></div></div></div></div>
@endsection