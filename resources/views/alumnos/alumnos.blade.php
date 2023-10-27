@extends('layouts.app')
@section('content')
<div class="container">
<div class="row float-right">
                <form >

                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese matrícula, carrera, teléfono, correo alterno o estatus" >
                  <div >
                      <input type="submit" name="boton" value="Buscar" class="btn btn-info">
                  </div>
                  
                </div>
                </form>
            </div>
<div class="row">
<div class="row float-right">
    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Nombre</th>
            <th align="center" style="background-color: #1B396A; color: white;">Matrícula</th>
            <th align="center" style="background-color: #1B396A; color: white;">Carrera</th>
            <th align="center" style="background-color: #1B396A; color: white;">Correo Alterno</th>
            <th align="center" style="background-color: #1B396A; color: white;">Telefono</th>
            <th align="center" style="background-color: #1B396A; color: white;">Estatus</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
        </tr>
        <tr>
            @foreach($alumnos as $alumno)
             <td>{{$loop->index+1}}</td>
             <td>{{$alumno->usuario->name}}</td>
             <td>{{$alumno->matricula}}</td>
             <td>{{$alumno->carrera}}</td> 
             <td>{{$alumno->calterno}}</td>
             <td>{{$alumno->telefono}}</td>
             <td>{{$alumno->status}}</td>
             <td> <a class="btn btn-success" href="{{route('edit.alumno',$alumno->id)}}" class="center">Editar</a></td>
             <td> <a class="btn btn-danger" href="{{route('destroy.alumno',$alumno->id)}}" class="center">Eliminar</a></td>
        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
</div>
    </div>
</div>
<div >{{$alumnos->onEachSide(6)->links()}}</div>
@endsection
