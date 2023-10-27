<?php
namespace App\Http\Controllers;
use App\Models\Caja;
use App\Models\Rol;
use App\Models\User;
use App\Http\Requests\StoreCajaRequest;
use App\Http\Requests\UpdateCajaRequest;
use Illuminate\Support\Facades\Hash;
use Auth;
class CajaController extends Controller{
    public function index(){
        $caja = Caja::orderBy('id','asc')->paginate(10);
        return view('caja.caja', ['caja'=>$caja]);}
    public function create(){
        $rols = Rol::all();
        return view('caja.nuevaCaja ',['rols'=>$rols]);}
    public function store(StoreCajaRequest $request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $user->id_rol=$request->id_rol;
        $user->save();
        $caja = new Caja();
        $ultimo = User::latest('id')->first();
        $caja->id_users=$ultimo->id;
        $caja->descripcion=$request->descripcion;
        $caja->save();
        return redirect()->route('index.caja');}
    public function show(Caja $caja){}
    public function edit($id){
        if (Auth::user()->id_rol=='1') {
            $caja = Caja::find($id);
            $rols = Rol::all();
            return view('caja.editarCaja',['caja'=>$caja,'rols'=>$rols]);
        } else {
            $user = User::find($id);
            $rols = Rol::all();
            return view('caja.updateCaja',['user'=>$user, 'rols'=>$rols]);
        }
}
    public function update(UpdateCajaRequest $request, $id){
        if (Auth::user()->id_rol=='1') {       
            $caja = Caja::find($id);
            $user = User::find($caja->id_users);
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;
            $user->save();
            $caja->descripcion=$request->descripcion;
            $caja->save();
            return redirect()->route('index.caja');
        } else {
            $user= User::where('id','=',$id)->first();
            $user->name = $request->name;
            $user->password= bcrypt($request->password);
            $user->save();
            return redirect()->route('mainCaja')->with('message', 'Actualizado Exitosamente'); 
        }
}
    public function destroy(Caja $caja){}
}
