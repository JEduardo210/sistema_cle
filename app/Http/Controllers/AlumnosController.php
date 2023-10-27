<?php
namespace App\Http\Controllers;
use App\Models\Alumnos;
use App\Http\Requests\StoreAlumnosRequest;
use App\Http\Requests\UpdateAlumnosRequest;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
class AlumnosController extends Controller{
    public function index(Request $request){
        $alumnos = Alumnos::orderBy('id','asc')->paginate(10);

        $variable = $request->buscar;
        $alumnos = Alumnos::Where('matricula','LIKE',"%".$variable."%")
                            ->orWhere('carrera','LIKE',"%".$variable."%")
                            ->orWhere('calterno','LIKE',"%".$variable."%")
                            ->orWhere('telefono','LIKE',"%".$variable."%")
                            ->orWhere('status','LIKE',"%".$variable."%")->paginate(10);

        return view('alumnos.alumnos', ['alumnos'=>$alumnos]);
    }
    public function create()
    {
        $rols = Rol::all();
        return view('alumnos.nuevoAlumno',['rols'=>$rols]);
    }
    public function store(StoreAlumnosRequest $request)
    {
        $user=new User();      
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $user->id_rol=$request->id_rol;
        $user->save();
        $alumno = new Alumnos();
        $ultimo = User::latest('id')->first();
        $alumno->id_users=$ultimo->id;
        $alumno->matricula=$request->matricula;
        $alumno->carrera=$request->carrera;
        $alumno->telefono=$request->telefono;
        $alumno->calterno=$request->alterno;
        $alumno->status=$request->estatus;
        $alumno->save();
        return redirect()->route('index.alumno');
    }
    public function show(Alumnos $alumnos){}

    public function edit($id){
        if (Auth::user()->id_rol=='1') {
            $alumno = Alumnos::find($id);
            $rols = Rol::all();
            return view('alumnos.editarAlumno',['alumno'=>$alumno, 'rols'=>$rols]);
        } else {           
            $user = User::find($id);
    
            $rols = Rol::all();
            return view('alumnos.updateAlumno',['user'=>$user, 'rols'=>$rols]);
    }     
}
    public function update(UpdateAlumnosRequest $request, $id){
        if (Auth::user()->id_rol=='1') {
            $alumno = Alumnos::find($id);
            $user = User::find($alumno->id_users);
            $user->name=$request->name;
            $user->email=$request->email;
            $user->save();
            $alumno->matricula=$request->matricula;
            $alumno->carrera=$request->carrera;
            $alumno->telefono=$request->telefono;
            $alumno->calterno=$request->alterno;
            $alumno->status=$request->estatus;
            $alumno->save();
            return redirect()->route('index.alumno');

        } else {           
            $user= User::where('id','=',$id)->first();
            $user->name = $request->name;
            $user->password= bcrypt($request->password);
            $user->save();
            return redirect()->route('mainEstudiante')->with('message', 'Actualizado Exitosamente'); 
    } 
}
    public function destroy($id)
    {
        $alumno = Alumnos::find($id);
        User::destroy($alumno->id_users);
        Alumnos::destroy($id);
        return redirect()->route('index.alumno');
    }
}
