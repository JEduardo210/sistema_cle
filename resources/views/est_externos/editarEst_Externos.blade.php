@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"  style="background-color: #1B396A; color: white;">{{ __('Actualizar Datos del Aprendiente Externo') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update.est_externos',$est_externos->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre de Usuario:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                                    value="{{$est_externos->usuario->name}}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo:') }}</label>
                            <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                            value="{{$est_externos->usuario->email}}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono:') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" 
                                                name="telefono" value="{{$est_externos->telefono}}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Estatus') }}</label>
                           <div class="col-md-6">
                               <select class="form-select" name="status" aria-label="Default select example">
                               <option selected>Selecciona una opción</option>                                 
                                  <option>Activo</option>
                                  <option>Inactivo</option>                                
                                </select>                               
                            </div>
                    </div>                
                    <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Actualizar') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('index.est_externos')}}" class="center" 
                                                style="background-color: #1B396A">Regresar a Lista</a></td>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection