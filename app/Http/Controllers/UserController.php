<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller{
    public function index(Request $request){
        $users = User::orderBy('name', 'desc')->paginate(6);
        $variable = $request->buscar;
        $users = User::Where('name','LIKE',"%".$variable."%")->paginate(6);
        return view('users.users', ['users'=>$users]);
    }
    public function create(){}
    public function store(StoreUserRequest $request){}
    public function show(User $user){}
    public function edit($id){
        $users = User::find($id);
        $rols = Rol::all();
        return view('users.editarUsers',['users'=>$users,'rols'=>$rols]);
    }

    public function edit_administrador($id){
        $users = User::find($id);
        $rols = Rol::all();
        return view('administrador.updateAdministrador',['users'=>$users,'rols'=>$rols]);
    }
    public function update(UpdateUserRequest $request, $id){
        $users = User::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password = Hash::make($request->password);
        $users->save();
        return redirect()->route('index.users');
    }

    public function update_administrador(UpdateUserRequest $request, $id){
        $users= User::where('id','=',$id)->first();
        $users->name = $request->name;
        $users->password= bcrypt($request->password);
        $users->save();
        return redirect()->route('mainAdministrador')->with('message', 'Actualizado Exitosamente'); 
    }
    public function destroy(User $user){

    }
}
