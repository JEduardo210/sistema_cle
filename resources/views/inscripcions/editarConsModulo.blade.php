@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="background-color: #1B396A; color: white;">{{ __('Validar Módulo:') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update.inscripcion',$inscripcions->id) }}">
                    @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Estatus:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="status_modulo" aria-label="Default select example">
                               <option selected>Selecciona una opción</option>
                                  <option>Aceptado</option>
                                  <option>No Aceptado</option>                              
                                </select>                               
                            </div>
                    </div>    
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Guardar Cambios') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('index.inscripcions')}}" class="center" style="background-color: #1B396A">Regresar a Lista</a></td>
                            </div>
                        </di
                    </form>
                </div></div></div></div></div>
                
@endsection