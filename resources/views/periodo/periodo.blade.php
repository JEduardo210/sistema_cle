@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Fecha de Inicio</th>
            <th align="center" style="background-color: #1B396A; color: white;">Fecha de Terminación</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
        </tr>
        <tr>
            @foreach($periodo as $periodo)
             <td>{{$loop->index+1}}</td>
             <td>{{$periodo->fech_ini}}</td>
             <td>{{$periodo->fech_term}}</td>
             <td> <a class="btn btn-success" href="{{route('edit.periodo',$periodo->id)}}" class="center">Editar</a></td>
             <td> <a class="btn btn-danger" href="{{route('destroy.periodo',$periodo->id)}}" class="center">Eliminar</a></td>
        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
</div>
    </div>
</div>
@endsection
