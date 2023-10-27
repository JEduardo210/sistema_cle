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
            <th align="center" style="background-color: #1B396A; color: white;"></th>

        </tr>
        <tr>
            @foreach($inscripcions as $inscripcion)
             <td>{{$loop->index+1}}</td>
             <td>{{$inscripcion->usuario?->name}}</td>
             <td>{{$inscripcion->usuario?->email}}</td>
        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
    </div>
  </div>
</div>
@endsection
