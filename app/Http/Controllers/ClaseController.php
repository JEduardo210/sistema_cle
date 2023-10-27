<?php
namespace App\Http\Controllers;
use App\Models\Clase;
use App\Http\Requests\StoreClaseRequest;
use App\Http\Requests\UpdateClaseRequest;
use App\Models\Modulo;
use App\Models\Docente;
use App\Models\Dia;
use App\Models\Horario;
use App\Models\Periodo;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class ClaseController extends Controller{
    public function index(){
        $clases = Clase::orderBy('id','asc')->paginate(10);
        return view('clase.clase', ['clases'=>$clases]);
    }
    public function create(){
        $modulos = Modulo::all();
        $docentes = Docente::all();
        $dias = Dia::all();
        $periodos =Periodo::all();
        $horarios = Horario::all();
        return view('clase.nuevaClase', ['modulos'=>$modulos, 'docentes'=>$docentes, 'dias'=>$dias,
        'periodos'=>$periodos, 'horarios'=>$horarios]);
    }
    public function store(StoreClaseRequest $request){
        $clase=new Clase();
        $clase->id_modulo=$request->id_modulo;
        $clase->id_docente=$request->id_docente;
        $clase->id_dia=$request->id_dia;
        $clase->id_periodo=$request->id_periodo;
        $clase->id_horario=$request->id_horario;
        $clase->save();
        return redirect()->route('index.clase');
    }
    public function show(Clase $clase){
        //
    }
    public function edit($id){
        $clase = Clase::find($id);
        $modulos = Modulo::all();
        $docentes = Docente::all();
        $dias = Dia::all();
        $periodos =Periodo::all();
        $horarios = Horario::all();  
        return view('clase.editarClase',['clase'=>$clase,
                                        'modulos'=>$modulos,
                                        'docentes'=>$docentes,
                                        'dias'=>$dias,
                                        'periodos'=>$periodos,
                                        'horarios'=>$horarios]);
    }
    public function update(UpdateClaseRequest $request, $id){
        $clase = Clase::find($id);
        $clase->id_modulo=$request->id_modulo;
        $clase->id_docente=$request->id_docente;
        $clase->id_dia=$request->id_dia;
        $clase->id_periodo=$request->id_periodo;
        $clase->id_horario=$request->id_horario;
        $clase->save();
        return redirect()->route('index.clase');
    }
    public function destroy($id){
       // $clase = Clase::find($id);
        Clase::destroy($id);
        return redirect()->route('index.clase');
    }
}
