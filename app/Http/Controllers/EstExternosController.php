<?php
namespace App\Http\Controllers;
use App\Models\Est_Externos;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreEst_ExternosRequest;
use App\Http\Requests\UpdateEst_ExternosRequest;
use Illuminate\Http\Request;
class EstExternosController extends Controller{
    public function index(Request $request){
        $est_externos = Est_Externos::orderBy('id','asc')->paginate(10);
        
        $variable = $request->buscar;
        $est_externos = Est_Externos::Where('telefono','LIKE',"%".$variable."%")
                                    ->orWhere('status','LIKE',"%".$variable."%")->paginate(10);

        return view('est_externos.est_externos', ['est_externos'=>$est_externos]);
    }
    public function create(){
        $rols = Rol::all();
        return view('est_externos.nuevoEst_Externos',['rols'=>$rols]);
    }
    public function store(StoreEst_ExternosRequest $request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $user->id_rol=$request->id_rol;
        $user->save();
        $est_externos = new Est_Externos();
        $ultimo = User::latest('id')->first();
        $est_externos->id_users=$ultimo->id;
        $est_externos->telefono=$request->telefono;
        $est_externos->status=$request->status;

        $est_externos->save();
        return redirect()->route('index.est_externos');
    }
    public function show(Est_Externos $est_Externos){
        
    }
    public function edit($id)
    {
        $est_externos = Est_Externos::find($id);
        $rols = Rol::all();
        return view('est_externos.editarEst_Externos',['est_externos'=>$est_externos,'rols'=>$rols]);
    }
    public function update(UpdateEst_ExternosRequest $request, $id){
        $est_externos = Est_Externos::find($id);
        $user = User::find($est_externos->id_users);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        $est_externos->telefono=$request->telefono;
        $est_externos->status=$request->status;
        $est_externos->save();
        return redirect()->route('index.est_externos');
    }
    public function destroy($id){
        $est_externos = Est_Externos::find($id);
        User::destroy($est_externos->id_users);
        Est_Externos::destroy($id);
        return redirect()->route('index.est_externos');
    }
}
