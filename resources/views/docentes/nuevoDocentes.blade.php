@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="background-color: #1B396A; color: white;">{{ __('Agregar Facilitador') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('store.docentes')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre de Usuario:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
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
                                    <span class="invalid-feedback" role="alert">
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
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                      
                        <div class="row mb-3">
                            <label for="carrera" class="col-md-4 col-form-label text-md-end">{{ __('Rol:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="id_rol" aria-label="Default select example">
                                  <option selected>Selecciona una opción</option>
                                  @foreach ($rols as $rol)
                                  <option value="{{$rol->id}}">
                                        {{$rol->nombre}}
                                  </option>
                                  @endforeach
                                </select>                                
                            </div>
                        </div>                    
                        <div class="row mb-3">
                            <label for="carrera" class="col-md-4 col-form-label text-md-end">{{ __('Nivel de Inglés:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="nivel" aria-label="Default select example">
                                  <option selected>Selecciona una opción</option>
                                  <option>A1</option>
                                  <option>A2</option>
                                  <option>B1</option>
                                  <option>B2</option>
                                  <option>C1</option>
                                  <option>C2</option>
                                </select>
                            </div>
                        </div>                                      
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" 
                                        name="telefono" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Alterno:') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" 
                                                    name="alterno" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Registrar') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center"
                                                         style="background-color: #1B396A">Regresar a Menú</a></td>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection