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
                    <!--ALUMNOS-->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/alumnos.png')}}" class="card-img-top" alt="..." width="0" height="128">
                            <div class="card-body">
                                <h5 class="card-title">Aprendientes Internos</h5>
                                <p class="card-text"></p>
                                <a href="{{route('register.alumno')}}" class="btn btn-primary"style="background-color: #1B396A">
                                                Registrar</a>
                                <a href="{{route('index.alumno')}}" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                            </div>
                            </div>
                        </div>
                        <div class="card h-80">
                            <img src="{{asset('/img/alumnos_externos.jpg')}}" class="card-img-top" alt="..." width="0" height="128">
                            <div class="card-body" align=center>
                                <h5 class="card-title">Aprendientes Externos</h5>
                                <p class="card-text"></p>
                                <a href="{{route('register.est_externos')}}" class="btn btn-primary"style="background-color: #1B396A">
                                            Registrar</a>
                                <a href="{{route('index.est_externos')}}" class="btn btn-primary"style="background-color: #1B396A">
                                            Ver</a>
                            </div>
                            </div>
                        <!--Incripcion-->
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/inscripcion.png')}}" class="card-img-top" alt="..." width="0" height="128">
                            <div class="card-body" align=center>
                                <h5 class="card-title">Incripciones</h5>
                                <p class="card-text"></p>
                                <a href="{{route('index.inscripcions')}}" class="btn btn-primary"style="background-color: #1B396A">
                                                    Ver</a>
                            </div>
                            </div>
                        </div>
                           <!--Status_inscripcion-->
                           <div class="col">
                              <div class="card h-80">
                             <img src="{{asset('/img/status.png')}}" class="card-img-top" alt="..." width="10" height="128">
                              <div class="card-body" align=center>
                                <h5 class="card-title">Estatus de Inscripción</h5>
                                <p class="card-text"></p>
                                <a href="{{route('accepted.inscripcion')}}" class="btn btn-primary"style="background-color: #1B396A">Sí</a>
                                <a href="{{route('NoAceptado.inscripcion')}}" class="btn btn-primary"style="background-color: #1B396A">No</a>
                          </div>
                         </div>
                         </div>

                        <!--Periodo-->
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/fecha.jpg')}}" class="card-img-top" alt="..." width="0" height="128">
                            <div class="card-body" align=center>
                                <h5 class="card-title">Periodo</h5>
                                <p class="card-text"></p>
                                <a href="{{route('register.periodo')}}" class="btn btn-primary"style="background-color: #1B396A">
                                            Registrar</a>
                                <a href="{{route('index.periodo')}}" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                            </div>
                            </div>
                        </div>
                            <!--Hora-->
                            <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/hora.jpg')}}" class="card-img-top" alt="..." width="0" height="128">
                            <div class="card-body" align=center>
                                <h5 class="card-title">Horario</h5>
                                <p class="card-text"></p>
                                <a href="{{route('register.horario')}}" class="btn btn-primary"style="background-color: #1B396A">
                                            Registrar</a>
                                <a href="{{route('index.horario')}}" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                            </div>
                            </div>
                        </div>
                        <!--DOCENTES-->
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/docentes.jpg')}}" class="card-img-top" alt="1px">
                            <div class="card-body" align=center>
                                <h5 class="card-title">Facilitadores</h5>
                                <p class="card-text"></p>
                                <a href="{{route('register.docentes')}}" class="btn btn-primary"style="background-color: #1B396A">
                                                Registrar</a>
                                <a href="{{route('index.docentes')}}" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                            </div>
                            </div>
                        </div>
                        <!--CLASES-->
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/clases.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Clases</h5>
                                <p class="card-text"></p>
                                <a href="{{route('register.clase')}}" class="btn btn-primary"style="background-color: #1B396A">
                                                    Crear Clase</a>
                                <a href="{{route('index.clase')}}" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                            </div>
                            </div>
                        </div>
                        <!--GRUPOS-->
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/grupos.jpg')}}" class="card-img-top" alt="1px" height="128">
                            <div class="card-body" align=center>
                                <h5 class="card-title">Grupos</h5>
                                <p class="card-text"></p>
                                <a href="{{route('register.grupos')}}" class="btn btn-primary"style="background-color: #1B396A">
                                                Registrar</a>
                                <a href="{{route('index.grupos')}}" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                            </div>
                            </div>
                        </div>
                        <!--CALIFICACION-->
                        <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/cal.jpg')}}" class="card-img-top" alt="1px" height="128">
                            <div class="card-body" align=center>
                                <h5 class="card-title">CALIFICACION</h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary"style="background-color: #1B396A">Registrar</a>
                                <a href="#" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                            </div></div></div> 
                         <!--CAJA-->
                         <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/caja.jpg')}}" class="card-img-top" alt="1px" height="128">
                            <div class="card-body" align=center>
                                <h5 class="card-title">Caja</h5>
                                <p class="card-text"></p>
                                <a href="{{route('register.caja')}}" class="btn btn-primary"style="background-color: #1B396A">
                                                    Registrar</a>
                                <a href="{{route('index.caja')}}" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                            </div></div></div>
                         <!--USUARIO-->
                         <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/usuario.jpg')}}" class="card-img-top" alt="1px" height="128">
                            <div class="card-body" align=center>
                                <h5 class="card-title">Usuarios en el Sistema</h5>
                                <p class="card-text"></p>
                                <a href="{{route('index.users')}}" class="btn btn-primary"style="background-color: #1B396A">Ver</a>
                            </div>
                            </div></div>
                                                     <!--USUARIO-->
                         <div class="col">
                            <div class="card h-80">
                            <img src="{{asset('/img/password.png')}}" class="card-img-top" alt="1px" height="128">
                            <div class="card-body" align=center>
                                <h5 class="card-title">Cambiar Contraseña</h5>
                                <p class="card-text"></p>
                                <a href="{{route('edit.edit_administrador', $id->id)}}" class="btn btn-primary"style="background-color: #1B396A">
                                                Actualizar</a>
                            </div></div></div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
