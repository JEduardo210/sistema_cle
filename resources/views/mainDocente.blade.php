@extends('layouts.inicio')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"align="center"  style="background-color: #1B396A; color: white;">{{ __('¡Bienvenido!') }}
            </div>
                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--Actualizar Contraseña-->  
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/password.png')}}" class="card-img-top" alt="..." width="0" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Cambiar Contraseña</h5>
                                <p class="card-text"></p>
                                <a href="{{route('edit.docentes', $id->id)}}" class="btn btn-primary"style="background-color: #1B396A">
                                                Actualizar</a>
                            </div></div></div>

                </div>
            </div>
        </div>
    </div>
 </div>
</div>
@endsection
