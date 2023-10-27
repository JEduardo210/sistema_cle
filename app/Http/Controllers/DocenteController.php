<?php
namespace App\Http\Controllers;
use App\Models\Docente;
use App\Http\Requests\StoreDocenteRequest;
use App\Http\Requests\UpdateDocenteRequest;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
class DocenteController extends Controller{
    public function index(Request $request){
        $docentes = Docente::orderBy('id','asc')->paginate(10);
        
        $variable = $request->buscar;
        $docentes = Docente::Where('nivel','LIKE',"%".$variable."%")
                                    ->orWhere('telefono','LIKE',"%".$variable."%")
                                    ->orWhere('alterno','LIKE',"%".$variable."%")->paginate(10);


        return view('docentes.docentes',['docentes'=>$docentes]);
    }
    public function create(){
        $rols = Rol::all();
        return view('docentes.nuevoDocentes', ['rols'=>$rols]);

    }
    public function store(StoreDocenteRequest $request){
        $user =new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password = Hash::make($request->password);
        $user->id_rol =$request->id_rol;
        $user->save();
        $docentes = new Docente();
        $ultimo = User::latest('id')->first();
        $docentes->id_users = $ultimo->id;
        $docentes->nivel = $request->nivel;
        $docentes->telefono = $request->telefono;
        $docentes->alterno = $request->alterno;
        $docentes->save();
        return redirect()->route('index.docentes');
    }
    public function show(Docente $docente){}
    public function edit($id){
        if (Auth::user()->id_rol=='1') {
            $docentes = Docente::find($id);
            $rols = Rol::all();
            return view('docentes.editarDocentes',['docentes'=>$docentes,'rols'=>$rols]);
        } else {
            $user = User::find($id);
            $rols = Rol::all();
            return view('docentes.updateDocente',['user'=>$user, 'rols'=>$rols]);
        }
    }
    public function update(UpdateDocenteRequest $request, $id){
        if (Auth::user()->id_rol=='1') {
            $docentes = Docente::find($id);
            $user = User::find($docentes->id_users);
            $user->name =$request->name;
            $user->email =$request->email;
            $user->save();
            $docentes->nivel = $request->nivel;
            $docentes->telefono = $request->telefono;
            $docentes->alterno = $request->alterno;
            $docentes->save();
            return redirect()->route('index.docentes');
        } else {
            $user= User::where('id','=',$id)->first();
            $user->name = $request->name;
            $user->password= bcrypt($request->password);
            $user->save();
            return redirect()->route('mainDocente')->with('message', 'Actualizado Exitosamente'); 
        }
        

    }
    public function destroy($id){
        $docentes = Docente::find($id);
        User::destroy($docentes->id_users);
        Docente::destroy($id);
        return redirect()->route('index.docentes');
    }
}
