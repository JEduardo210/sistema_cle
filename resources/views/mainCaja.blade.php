@extends('layouts.inicio')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #1B396A; color: white;">{{ __('¡Bienvenido!') }}</div>

                <div class="card-body"  align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--Validación de Pago-->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/pagos.jpg')}}" class="card-img-top" alt="..." width="0" height="200">
                            <div class="card-body">
                                <h5 class="card-title">Validación de Pago</h5>
                                <p class="card-text"></p>
                                <a href="{{route('index_inscripcions.index')}}" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                        </div></div></div>
                        <!--Actualizar Contraseña-->  
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/password.jpg')}}" class="card-img-top" alt="..." width="0" height="210">
                            <div class="card-body">
                            <h5 class="card-title">Cambiar Contraseña</h5>
                            <a href="{{route('edit.caja', $id->id)}}" class="btn btn-primary"style="background-color: #1B396A">Actualizar</a>
                   </div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
