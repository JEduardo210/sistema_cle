<?php
namespace App\Http\Controllers;
use App\Models\Grupo;
use App\Models\Alumnos;
use App\Models\Clase;
use App\Models\Docente;
use App\Models\Horario;
use App\Models\User;
use App\Http\Requests\StoreGrupoRequest;
use App\Http\Requests\UpdateGrupoRequest;
use Illuminate\Http\Request;

class GrupoController extends Controller{
    public function index(Request $request){
        $grupos = Grupo::orderBy('descripcion','asc')->paginate(10);

        $variable = $request->buscar;
        $grupos = Grupo::Where('descripcion','LIKE',"%".$variable."%")->paginate(10);

        return view('grupos.grupos',['grupos'=>$grupos]);
    }
     public function lista($id){
        $grupos = Grupo::where('id','=',$id)->get();
        return view('grupos.lista',['grupos'=>$grupos]);
     }
    public function create(){
        $clases = Clase::all();
        return view('grupos.nuevoGrupo',['clases'=>$clases]);
    }
    public function store(StoreGrupoRequest $request){
        $grupo = new Grupo();
        $grupo->id_clase = $request->clase;
        $grupo->descripcion = $request->descripcion;
        $grupo->save();
        return redirect()->route('index.grupos');
    }
    public function show(Grupo $grupo){
        //
    }
    public function edit($id){
        $grupos = Grupo::find($id);
        $clases = Clase::all();
        $alumnos = Alumnos::all();
        $docentes = Docente::all();
        $horarios = Horario::all();
        return view('grupos.editarGrupos',['grupos'=>$grupos, 'clases'=>$clases, 
        'alumnos'=>$alumnos, 'docentes'=>$docentes,
       'horarios'=>$horarios]);
    }
    public function update(UpdateGrupoRequest $request, $id){
        $grupo = Grupo::find($id);
        $grupo->id_clase = $request->clase;
        $grupo->descripcion = $request->descripcion;
        $grupo->save();
        return redirect()->route('index.grupos');
    }
    public function destroy($id){
        Grupo::destroy($id);
        return redirect()->route('index.grupos');

    }
}
