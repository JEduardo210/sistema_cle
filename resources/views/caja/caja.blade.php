@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Nombre</th>
            <th align="center" style="background-color: #1B396A; color: white;">Correo</th>
            <th align="center" style="background-color: #1B396A; color: white;">Descipción</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
        </tr>
        <tr>
            @foreach($caja as $caja)
             <td>{{$loop->index+1}}</td>
             <td>{{$caja->usuario->name}}</td>
             <td>{{$caja->usuario->email}}</td>
             <td>{{$caja->descripcion}}</td>
             <td> <a class="btn btn-success" href="{{route('edit.caja', $caja->id)}}" class="center">Editar</a></td>
        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
</div>
</div>
</div>
@endsection
