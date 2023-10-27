@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="row float-right">
    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Aprendiente</th>
            <th align="center" style="background-color: #1B396A; color: white;">Correo Electrónico</th>
            <th align="center" style="background-color: #1B396A; color: white;">Fecha de Inicio</th>
            <th align="center" style="background-color: #1B396A; color: white;">Fecha de Terminación</th>
            <th align="center" style="background-color: #1B396A; color: white;">Módulo</th>
            <th align="center" style="background-color: #1B396A; color: white;">Constancia del Módulo</th>
            <th align="center" style="background-color: #1B396A; color: white;">Estatus</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>

        </tr>
        <tr>
            @foreach($inscripcions as $inscripcion)
             <td>{{$loop->index+1}}</td>
             <td>{{$inscripcion->usuario?->name}}</td>
             <td>{{$inscripcion->usuario?->email}}</td>
             @php

             $fech_ini = '';

             if($inscripcion->periodo->first() == NULL){
                $fech_ini = 'SIN INFORMACION';

             }else{
                $fech_ini = $inscripcion->periodo->first()['fech_ini'];
             }
            @endphp
            @php

             $fech_term = '';

             if($inscripcion->periodo->first() == NULL){
                $fech_term = 'SIN INFORMACION';

             }else{
                $fech_term = $inscripcion->periodo->first()['fech_ini'];
             }
            @endphp

            <td>{{$fech_ini}}</td>
            <td>{{$fech_term}}</td>

            <td>{{$inscripcion->modulo->nombre}}</td>

             @php

                $consmodulo = '';

                if($inscripcion->consmodulo == NULL){
                $consmodulo = 'SIN INFORMACION';

                }else{
                $consmodulo = $inscripcion['consmodulo'];
                }
            @endphp             
             <td align="center"><a class="btn btn-success" href="{{asset($consmodulo)}}" class="center" target="_blank">Ver</a></td>
             @php

            $vaucher = '';

            if($inscripcion->vaucher == NULL){
            $vaucher = 'SIN INFORMACION';

            }else{
            $vaucher = $inscripcion['vaucher'];
            }
            @endphp   

                         @php

             $fech_ini = '';

             if($inscripcion->periodo->first() == NULL){
                $fech_ini = 'SIN INFORMACION';

             }else{
                $fech_ini = $inscripcion->periodo->first()['fech_ini'];
             }
            @endphp
            @php

             $fech_term = '';

             if($inscripcion->periodo->first() == NULL){
                $fech_term = 'SIN INFORMACION';

             }else{
                $fech_term = $inscripcion->periodo->first()['fech_ini'];
             }
            @endphp
            <td>{{$inscripcion->status_modulo}}</td>

            <td> <a class="btn btn-primary" href="{{route('edit.inscripcion',$inscripcion->id)}}" class="center">Validar</a></td>

        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
    </div>
  </div>
</div>
@endsection
