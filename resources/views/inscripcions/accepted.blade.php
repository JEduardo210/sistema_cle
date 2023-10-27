@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">

    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Aprendientes</th>
            <th align="center" style="background-color: #1B396A; color: white;">Fecha de inicio</th>
            <th align="center" style="background-color: #1B396A; color: white;">Fecha de terminacion</th>
            <th align="center" style="background-color: #1B396A; color: white;">Status</th>
            
        </tr>
        @foreach($inscripcions as $inscripcion)
        @if($inscripcion->status_vaucher == 'Aceptado')
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$inscripcion->usuario?->name}}</td>

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
            <td>{{$inscripcion->status_modulo}}</td>
            
            
        </tr>
        @endif
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menu Principal</a>
 </div>
</div>
</div>

@endsection