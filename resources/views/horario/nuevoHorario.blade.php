@extends('layouts.app')
@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"  style="background-color: #1B396A; color: white;">{{ __('Registrar Horario') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store.horario') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Hora de Inicio:') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="time" class="form-control @error('password') is-invalid @enderror" name="hora_ini" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Hora de Terminación:') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="time" class="form-control @error('password') is-invalid @enderror" name="hora_term" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" rols="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                      
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1B396A">
                                    {{ __('Registrar Horario') }}
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