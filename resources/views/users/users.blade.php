@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">

<div class="row float-right">
                <form >

                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese nombre" >
                  <div >
                      <input type="submit" name="boton" value="Buscar" class="btn btn-info">
                  </div>
                  
                </div>
                </form>
            </div>

<div class="row float-right">
    <table class="table" >
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Nombre</th>
            <th align="center" style="background-color: #1B396A; color: white;">Correo Institucional</th>
            <th align="center" style="background-color: #1B396A; color: white;">Rol/Estatus</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
        </tr>
        <tr>
            @foreach($users as $user)
             <td>{{$loop->index+1}}</td>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td>{{$user->rols?->nombre}}</td>
        <td> <a class="btn btn-success" href="{{route('edit.users',$user->id)}}" class="center">Editar</a></td>
        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
    </div>
  </div>
</div>
<div >{{$users->onEachSide(3)->links()}}</div>

@endsection
