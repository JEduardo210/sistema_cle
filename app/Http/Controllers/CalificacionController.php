<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Grupo;
use App\Models\User;
use App\Http\Requests\StoreCalificacionRequest;
use App\Http\Requests\UpdateCalificacionRequest;

class CalificacionController extends Controller{
    public function index($id){
        $calificaciones = Calificacion::where('id_grupo','=',$id)->get();
        return view('calificaciones.listas',['calificaciones'=>$calificaciones]);
    }
    public function create($id){
        $grupo = Grupo::find($id);
        $alumnos = User::where('id_rol','=','2')->get();
        $calificaciones = Calificacion::pluck('id_users');
        $v = User::where('id_rol','=','2')->whereNotIn('id',$calificaciones)->get();
        return view('calificaciones.nuevaCal',['grupo'=>$grupo,'alumnos'=>$alumnos,'v'=>$v]);
    }
    public function store(StoreCalificacionRequest $request){
        $calificacion =new Calificacion();
        $calificacion->id_users = $request->alumno;
        $calificacion->id_grupo = $request->id_grupo;
        $calificacion->save();
        return redirect()->route('index.grupos');
    }
    public function show(Calificacion $calificacion){ }
    public function edit(Calificacion $calificacion){

    }

    public function update(UpdateCalificacionRequest $request, Calificacion $calificacion){
        
    }
    public function destroy($id){
        Calificacion::destroy($id);
        return redirect()->route('index.grupos');
    }
}
