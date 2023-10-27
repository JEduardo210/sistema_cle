@extends('layouts.app')
@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"  style="background-color: #1B396A; color: white;">{{ __('Registrar Inscripción') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store.inscripcions')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre:') }}</label>
                            <div class="col-md-6">
                                <input id="id_alumnos" disabled type="text" class="form-control @error('name') is-invalid @enderror" 
                                            value="{{Auth::user()->name}}" required autocomplete="id_users" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="" value="{{Auth::user()->id}}" hidden=""name="id_users">
                        <div class="row mb-3">
                            <label for="##" class="col-md-4 col-form-label text-md-end">{{ __('Periodo:') }}</label>

                            <div class="col-md-6">
                               <select class="form-select" name="id_periodo" aria-label="Default select example">
                                  <option selected>Seleccione el periodo</option>
                                  @foreach ($periodos as $periodo)
                                  <option value="{{$periodo->id}}">
                                        {{$periodo->fech_ini}} - {{$periodo->fech_term}}
                                  </option>
                                  @endforeach
                                </select>                                
                            </div>
                    </div>

                    <div class="row mb-3">
                            <label for="##" class="col-md-4 col-form-label text-md-end">{{ __('Módulo a Cursar:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="id_modulo" aria-label="Default select example">
                                  <option selected>Seleccione el módulo</option>
                                  @foreach ($modulos as $modulo)
                                  <option value="{{$modulo->id}}">
                                        {{$modulo->nombre}}
                                  </option>
                                  @endforeach
                                </select>                                
                            </div></div>
                    
                        <div class="row mb-3">
                        	<label for="foto" class="col-md-4 col-form-label text-md-end">{{ __('Subir Constancia del Módulo:') }}</label>
                        	<div class="col-md-6">
						  <input class="form-control" type="file" name="consmodulo">
						  </div>
						</div>
                        <div class="row mb-3">
                        	<label for="foto" class="col-md-4 col-form-label text-md-end">{{ __('Subir Vaúcher:') }}</label>
                        	<div class="col-md-6">
						  
						  <input class="form-control" type="file" name="vaucher">
						  </div>
						</div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Registrar Aprendiente') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" style="background-color: #1B396A">Menú Principal</a></td>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection