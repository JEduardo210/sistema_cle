@extends('layouts.app')
@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"  style="background-color: #1B396A; color: white;">
                                                {{ __('Registrar Aprendiente') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store.alumno') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre de Usuario:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
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
                                        value="@tecmartinez.edu.mx" required autocomplete="email" autofocus>
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
                            <label for="carrera" class="col-md-4 col-form-label text-md-end">{{ __('Rol:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="id_rol" aria-label="Default select example">
                                  <option selected>Seleccione una opción</option>
                                  @foreach ($rols as $rol)
                                  <option value="{{$rol->id}}">
                                        {{$rol->nombre}}
                                  </option>
                                  @endforeach
                                </select>                               
                    </div>
                    </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Matrícula:') }}</label>
                           <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                            name="matricula" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="carrera" class="col-md-4 col-form-label text-md-end">{{ __('Carrera:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="carrera" aria-label="Default select example">
                               <option selected>Selecciona una opción</option>
                                  <option>Ingeniería en Sistemas Computacionales</option>
                                  <option>Ingeniería en Gestión Empresarial</option>
                                  <option>Ingeniería en Mecatrónica</option>
                                  <option>Ingeniería Ambiental</option>
                                  <option>Ingeniería en Industrias Alimentarias</option>
                                  <option>Ingeniería en Sistemas Computacionales (Mixto)</option>
                                  <option>Ingeniería en Gestión Empresarial (Mixto)</option>                                                                    
                                </select>
                            </div>  </div>                          
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Alterno:') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" 
                                        name="alterno" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono:') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" 
                                        name="telefono" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Estatus') }}</label>
                           <div class="col-md-6">
                               <select class="form-select" name="estatus" aria-label="Default select example">
                               <option selected>Selecciona una opción</option>                                 
                                  <option>Activo</option>
                                  <option>Inactivo</option>                                
                                </select>                               
                            </div>
                    </div>                 
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Registrar Aprendiente') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" 
                                                style="background-color: #1B396A">Menú Principal</a></td>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection