@extends('layouts.app')
@section('content')
<div class="container">
<div class="row float-right">
                <form >

                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese correo o teléfono" >
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
            <th align="center" style="background-color: #1B396A; color: white;">Nombre</th>
            <th align="center" style="background-color: #1B396A; color: white;">Correo</th>
            <th align="center" style="background-color: #1B396A; color: white;">Teléfono</th>
            <th align="center" style="background-color: #1B396A; color: white;">Estatus</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>

        </tr>
        <tr>
            @foreach($est_externos as $est_externos)
             <td>{{$loop->index+1}}</td>
             <td>{{$est_externos->usuario?->name}}</td>
             <td>{{$est_externos->usuario->email}}</td>
             <td>{{$est_externos->telefono}}</td> 
             <td>{{$est_externos->status}}</td> 
             <td> <a class="btn btn-success" href="{{route('edit.est_externos',$est_externos->id)}}" class="center">Editar</a></td>
             <td> <a class="btn btn-danger" href="{{route('destroy.est_externos',$est_externos->id)}}" class="center">Eliminar</a></td>
        </tr>
        @endforeach
    </table>
    <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" style="background-color: #1B396A; color: white;">Menú Principal</a>
</div>
    </div>
</div>
@endsection
