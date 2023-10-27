@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="background-color: #1B396A; color: white;">{{ __('Asignar Aprendiente a Clase:') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store.calificaciones') }}">
                        @csrf
                        <input type="text" hidden="" value="{{$grupo->id}}" name="id_grupo">
                        <div class="row mb-3">
                            <label for="##" class="col-md-4 col-form-label text-md-end">{{ __('Aprendiente:') }}</label>

                            <div class="col-md-6">
                               <select class="form-select" name="alumno" aria-label="Default select example">
                                  <option selected>Seleccione la clase</option>
                                  @foreach ($v as $c)
                                  <option value="{{$c->id}}">
                                        {{$c->name}}  
                                    </option>
                                  @endforeach
                                </select>                                
                            </div>
                    </div>

                    
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Registrar') }}
                                </button>
                                <td><a class= "btn btn-primary" href ="{{route('index.grupos')}}" class="center" style="background-color: #1B396A">Regresar a Lista</a></td>
                            </div>
                        </di
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection