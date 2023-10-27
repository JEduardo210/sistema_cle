@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Hora de Inicio</th>
            <th align="center" style="background-color: #1B396A; color: white;">Hora de Terminación</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
        </tr>
        <tr>
            @foreach($horario as $horario)
             <td>{{$loop->index+1}}</td>
             <td>{{$horario->hora_ini}}</td>
             <td>{{$horario->hora_term}}</td>
             <td> <a class="btn btn-success" href="{{route('edit.horario',$horario->id)}}" class="center">Editar</a></td>
             <td> <a class="btn btn-danger" href="{{route('destroy.horario',$horario->id)}}" class="center">Eliminar</a></td>
        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
</div>
    </div>
</div>
@endsection
