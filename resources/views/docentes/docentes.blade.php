@extends('layouts.app')
@section('content')
<div class="container">
<div class="row float-right">
                <form >

                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese nivel de inglés, teléfono o alterno" >
                  <div >
                      <input type="submit" name="boton" value="Buscar" class="btn btn-info">
                  </div>
                  
                </div>
                </form>
            </div>
<div class="row">
    <table class="table">
        <tr>
            <th align="center" style="background-color: #1B396A; color: white;">#</th>
            <th align="center" style="background-color: #1B396A; color: white;">Nombre</th>
            <th align="center" style="background-color: #1B396A; color: white;">Nivel de Inglés</th>
            <th align="center" style="background-color: #1B396A; color: white;">Teléfono</th>
            <th align="center" style="background-color: #1B396A; color: white;">Correo Alterno</th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
            <th align="center" style="background-color: #1B396A; color: white;"></th>
        </tr>    
        <tr>
        @foreach($docentes as $docente)
            <td>{{$loop->index+1}}</td>
            <td>{{$docente->usuario?->name}}</td>
            <td>{{$docente->nivel}}</td>
            <td>{{$docente->telefono}}</td>
            <td>{{$docente->alterno}}</td>
            <td><a class= "btn btn-success" href ="{{route('edit.docentes',$docente->id)}}" class="center">Editar</a></td>
            <td><a class= "btn btn-danger" href ="{{route('destroy.docentes',$docente->id)}}" class="center">Eliminar</a></td>
            </tr> 
        @endforeach  
      </table>    
      <div align="center">
    <a class= "btn btn-primary" href ="{{route('mainAdministrador')}}" class="center" align="center" 
                                                    style="background-color: #1B396A; color: white;">Menú Principal</a>
    </div>
    </div>
</div>
<div >
</div>
@endsection