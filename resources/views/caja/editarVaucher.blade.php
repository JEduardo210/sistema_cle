@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="background-color: #1B396A; color: white;">{{ __('Validar Vaúcher:') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update_inscripcions.update',$i->id) }}">
                    @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Estatus:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="status_vaucher" aria-label="Default select example">
                               <option selected>Selecciona una opción</option>
                                  <option>Aceptado</option>
                                  <option>No Aceptado</option>                              
                                </select>                               
                            </div>
                    </div>    
                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nota:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nota" 
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Guardar Cambios') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('index_inscripcions.index')}}" class="center" style="background-color: #1B396A">Regresar a Lista</a></td>
                            </div>
                        </di
                    </form>
                </div></div></div></div></div>
@endsection