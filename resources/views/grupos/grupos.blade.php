@extends('layouts.app')
@section('content')
<div class="container">
<div class="row float-right">
                <form >

                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese identificador del grupo" >
                  <div >
                      <input type="submit" name="boton" value="Buscar" class="btn btn-info">
                  </div>
                  
                </div>
                </form>
            </div>
<div class="row">
    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Identificador de Grupo</th>
            <th align="center" style="background-color: #1B396A; color: white;">Docente y Horario</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
        </tr>
        <tr>
        @foreach($grupos as $grupo)
       
        <td>{{$loop->index+1}}</td>
        <td>{{$grupo->descripcion}}</td>
        <td>{{$grupo->clase->docente->usuario->name}} - {{$grupo->clase->horario->hora_ini}} - {{$grupo->clase->horario->hora_term}}</td>
        <td> <a class="btn btn-success" href="{{route('edit.grupos',$grupo->id)}}" class="center">Editar</a></td>
        <td><a href="{{route('register.calificaciones',$grupo->id)}}" class="btn btn-primary"style="background-color: #B45F04">Registrar</a></td>
        <td><a href="{{route('calificaciones',$grupo->id)}}" class="btn btn-primary"style="background-color: #585858">Participantes</a></td>
        <td> <a class="btn btn-danger" href="{{route('destroy.grupos',$grupo->id)}}" class="center">Eliminar</a></td>
        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
</div>
    </div>
</div>

@endsection
