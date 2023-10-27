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
            <th align="center" style="background-color: #1B396A; color: white;">Vaúcher</th>
            <th align="center" style="background-color: #1B396A; color: white;">Estatus</th>
            <th align="center" style="background-color: #1B396A; color: white;">Nota</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>

        </tr>
        <tr>
            @foreach($i as $i)
             <td>{{$loop->index+1}}</td>
             <td>{{$i->usuario?->name}}</td>
             <td>{{$i->usuario?->email}}</td>
             @php

             $fech_ini = '';

             if($i->periodo->first() == NULL){
                $fech_ini = 'SIN INFORMACION';

             }else{
                $fech_ini = $i->periodo->first()['fech_ini'];
             }
            @endphp
            @php

             $fech_term = '';

             if($i->periodo->first() == NULL){
                $fech_term = 'SIN INFORMACION';

             }else{
                $fech_term = $i->periodo->first()['fech_ini'];
             }
            @endphp

            <td>{{$fech_ini}}</td>
            <td>{{$fech_term}}</td>
            <td>{{$i->modulo->nombre}}</td>

            @php

            $vaucher = '';

            if($i->vaucher == NULL){
            $consmodulo = 'SIN INFORMACION';

            }else{
            $vaucher = $i['vaucher'];
            }
            @endphp             
            <td align="center"><a class="btn btn-success" href="{{asset($vaucher)}}" class="center" target="_blank">Ver</a></td>
            <td>{{$i->status_vaucher}}</td>
            <td>{{$i->nota}}</td>
            <td> <a class="btn btn-primary" href="{{route('edit_inscripcions.edit',$i->id)}}" class="center">Validar</a></td>

        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainCaja')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
    </div>
  </div>
</div>
@endsection
