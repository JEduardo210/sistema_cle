@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">


    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Aprendientes</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            
        </tr>
        <tr>
            @foreach($calificaciones as $calificacion)

         

             <td>{{$loop->index+1}}</td>
             <td>{{$calificacion->usuario->name}}</td>
             
             <td> <a class="btn btn-danger" href="{{route('destroy.calificacion',$calificacion->id)}}" class="center">Eliminar</a></td>

        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('index.grupos')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Regresar a Lista</a>
 </div>
</div>
</div>

@endsection
