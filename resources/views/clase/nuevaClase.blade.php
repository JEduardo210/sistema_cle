@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="background-color: #1B396A; color: white;">{{ __('Crear Clase:') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store.clase') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="##" class="col-md-4 col-form-label text-md-end">{{ __('Módulos:') }}</label>

                            <div class="col-md-6">
                               <select class="form-select" name="id_modulo" aria-label="Default select example">
                                  <option selected>Seleccione el módulo</option>
                                  @foreach ($modulos as $modulo)
                                  <option value="{{$modulo->id}}">
                                        {{$modulo->nombre}}
                                  </option>
                                  @endforeach
                                </select>                                
                            </div>
                    </div>
                    <div class="row mb-3">
                            <label for="##" class="col-md-4 col-form-label text-md-end">{{ __('Facilitador:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="id_docente" aria-label="Default select example">
                                  <option selected>Selecciona una opción</option>
                                  @foreach ($docentes as $docente)
                                  <option value="{{$docente->id}}">
                                        {{$docente->usuario?->name}}
                                  </option>
                                  @endforeach
                                </select>                                
                            </div>
                    </div>
                    <div class="row mb-3">
                            <label for="##" class="col-md-4 col-form-label text-md-end">{{ __('Día:') }}</label>
                            <div class="col-md-6">
                               <select class="form-select" name="id_dia" aria-label="Default select example">
                                  <option selected>Selecciona una opción</option>
                                  @foreach ($dias as $dia)
                                  <option value="{{$dia->id}}">
                                        {{$dia->descripcion}}
                                  </option>
                                  @endforeach
                                </select>                                
                            </div>
                    </div>
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
                            <label for="##" class="col-md-4 col-form-label text-md-end">{{ __('Horario:') }}</label>

                            <div class="col-md-6">
                               <select class="form-select" name="id_horario" aria-label="Default select example">
                                  <option selected>Seleccione el horario</option>
                                  @foreach ($horarios as $horario)
                                  <option value="{{$horario->id}}">
                                        {{$horario->hora_ini}} - {{$horario->hora_term}}
                                  </option>
                                  @endforeach
                                </select>                                
                            </div>
                    </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Crear Clase') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" style="background-color: #1B396A">Regresar a Menú</a></td>
                            </div>
                        </di
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection