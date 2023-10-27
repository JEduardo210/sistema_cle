<?php
namespace App\Http\Controllers;
use App\Models\Horario;
use App\Http\Requests\StoreHorarioRequest;
use App\Http\Requests\UpdateHorarioRequest;
class HorarioController extends Controller{
    public function index(){
        $horario = Horario::orderBy('id','asc')->paginate(10);
        return view('horario.horario', ['horario'=>$horario]);
    }
    public function create(){
        return view('horario.nuevoHorario');
    }
    public function store(StoreHorarioRequest $request){
        $horario=new Horario();       
        $horario->hora_ini=$request->hora_ini;
        $horario->hora_term=$request->hora_term;
        $horario->save();
        return redirect()->route('index.horario');
    }
    public function show(Horario $horario){
        //
    }
    public function edit($id){
        $horario = Horario::find($id);
        return view('horario.editarHorario',['horario'=>$horario]);
    }
    public function update(UpdateHorarioRequest $request, $id){
        $horario =Horario::find($id);    
        $horario->hora_ini=$request->hora_ini;
        $horario->hora_term=$request->hora_term;
        $horario->save();
        return redirect()->route('index.horario');
    }
    public function destroy($id)    {
        $horario = Horario::find($id);
        Horario::destroy($id);
        return redirect()->route('index.horario');
    }
}
