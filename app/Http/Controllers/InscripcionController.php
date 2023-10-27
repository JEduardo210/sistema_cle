<?php
namespace App\Http\Controllers;
use App\Models\Inscripcion;
use App\Models\User;
use App\Models\Alumnos;
use App\Models\Est_Externos;
use App\Models\Periodo;
use App\Models\Modulo;
use App\Models\Va_Pago;
use App\Models\Va_Modulo;

use App\Http\Requests\StoreInscripcionRequest;
use App\Http\Requests\UpdateInscripcionRequest;
use Illuminate\Http\Request;
class InscripcionController extends Controller{
    public function index(){
        $inscripcions = Inscripcion::orderBy('id','asc')->paginate(10);
        return view('inscripcions.inscripcions', ['inscripcions'=>$inscripcions]);
    }
    public function accepted(){
    $inscripcions = Inscripcion::where('status_vaucher', 'Aceptado')->get();
    return view('inscripcions.accepted', compact('inscripcions'));
}
public function NoAceptado(){
    $inscripcions = Inscripcion::where('status_vaucher', 'No Aceptado')->get();
    return view('inscripcions.NoAceptados', compact('inscripcions'));
}
    //APARTADO DE VAUCHER - CAJA
    public function index_inscripcions(){
        $i = Inscripcion::orderBy('id','asc')->paginate(10);
        return view('caja.inscripcionsVaucher', ['i'=>$i]);
    }
    public function create(){
        $inscripcions=Inscripcion::all();
        $periodos =Periodo::all();
        $alumnos = Alumnos::all();
        $est_externos = Est_Externos::all();
        $modulos = Modulo::all();
        $va_modulo = Va_Modulo::all();
        $va_pago = Va_Pago::all();
        return view('inscripcions.nuevaInscripcion', ['inscripcions'=>$inscripcions, 'periodos'=>$periodos, 'alumnos'=>$alumnos, 
                    'est_externos'=>$est_externos, 'modulos'=>$modulos, 'va_modulo'=>$va_modulo, 'va_mpago'=>$va_pago]);
    }
    public function store(StoreInscripcionRequest $request){
        $inscripcions=new Inscripcion();

        $inscripcions->id_users=$request->id_users;
        $inscripcions->id_periodo=$request->id_periodo;
        $inscripcions->id_modulo=$request->id_modulo;
        $inscripcions->save();

        if($request->hasFile('consmodulo')){
            $file =$request->file('consmodulo');
            $destinationPath = 'consmodulos/';
            $filename= time() . '-' . $file->getClientOriginalName();
            $uploadSuccess =$request->file('consmodulo')->move($destinationPath,$filename);
           $inscripcions->consmodulo = $destinationPath . $filename;
        }

            if($request->hasFile('vaucher')){
                $file =$request->file('vaucher');
                $destinationPath = 'vaucher/';
                $filename= time() . '-' . $file->getClientOriginalName();
                $uploadSuccess =$request->file('vaucher')->move($destinationPath,$filename);     
               $inscripcions->vaucher = $destinationPath . $filename;
        }
        $inscripcions->save();
      
       return redirect()->route('mainEstudiante');       
    }
    public function show(Inscripcion $inscripcion){
        //
    }
    public function edit($id){
        $inscripcions = Inscripcion::find($id);
        return view('inscripcions.editarConsModulo',['inscripcions'=>$inscripcions]);
    }
    //APARTADO DE VAUCHER - CAJA
    public function edit_inscripcions($id){
        $i = Inscripcion::find($id);
        return view('caja.editarVaucher', ['i'=>$i]);
    }
    public function update(UpdateInscripcionRequest $request, $id)
    {
        $inscripcions = Inscripcion::find($id);
        $inscripcions->status_modulo = $request->status_modulo;
        $inscripcions->save();
        return redirect()->route('index.inscripcions');
    } 
    //APARTADO DE VAUCHER - CAJA
    public function update_inscripcions(UpdateInscripcionRequest $request, $id)
    {
        $i = Inscripcion::find($id);
        $i->status_vaucher = $request->status_vaucher;
        $i->nota = $request->nota;
        $i->save();
        return redirect()->route('index_inscripcions.index');
    }
    public function destroy(Inscripcion $inscripcion){
        //
    }
}
