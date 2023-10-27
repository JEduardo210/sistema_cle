@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"  style="background-color: #1B396A; color: white;">{{ __('Actualizar Datos de Caja') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update.caja',$caja->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre de Usuario:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                                        value="{{$caja->usuario->name}}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Institucional:') }}</label>
                            <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                                        value="{{$caja->usuario->email}}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña:') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                                        name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Descripción:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                                        name="descripcion" value="{{$caja->descripcion}}" required autocomplete="name" autofocus>
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
                                    {{ __('Actualizar') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('index.caja')}}" class="center" style="background-color: #1B396A">Regresar a Lista</a></td>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection