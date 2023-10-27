@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Módulo</th>
            <th align="center" style="background-color: #1B396A; color: white;">Docente</th>
            <th align="center" style="background-color: #1B396A; color: white;">Día</th>
            <th align="center" style="background-color: #1B396A; color: white;">Fecha de Inicio</th>
            <th align="center" style="background-color: #1B396A; color: white;">Fecha de Terminación</th>
            <th align="center" style="background-color: #1B396A; color: white;">Hora de Inicio</th>
            <th align="center" style="background-color: #1B396A; color: white;">Hora de Terminación</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
        </tr>
        <tr>
            @foreach($clases as $clase)



             <td>{{$loop->index+1}}</td>
             <td>{{$clase->modulo->nombre}}</td>
             <td>{{$clase->docente->usuario?->name}}</td>
             <td>{{$clase->dia->descripcion}}</td>

             

             @php

             $fech_ini = '';

             if($clase->periodo->first() == NULL){
                $fech_ini = 'SIN INFORMACION';

             }else{
                $fech_ini = $clase->periodo->first()['fech_ini'];
             }
            @endphp
            @php

             $fech_term = '';

             if($clase->periodo->first() == NULL){
                $fech_term = 'SIN INFORMACION';

             }else{
                $fech_term = $clase->periodo->first()['fech_ini'];
             }
            @endphp
            @php

             $hora_ini = '';

             if($clase->horario->first() == NULL){
                $hora_ini = 'SIN INFORMACION';

             }else{
                $hora_ini = $clase->horario->first()['hora_ini'];
             }
            @endphp
            @php

             $hora_term = '';

             if($clase->horario->first() == NULL){
                $hora_term = 'SIN INFORMACION';

             }else{
                $hora_term = $clase->horario->first()['hora_term'];
             }
            @endphp

            <td>{{$fech_ini}}</td>
            <td>{{$fech_term}}</td>
            <td>{{$hora_ini}}</td>
            <td>{{$hora_term}}</td>

             <td> <a class="btn btn-success" href="{{route('edit.clase',$clase->id)}}" class="center">Editar</a></td>
             <td> <a class="btn btn-danger" href="{{route('destroy.clase',$clase->id)}}" class="center">Eliminar</a></td>
        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
    </div>
    </div>
</div>

@endsection