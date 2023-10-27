<?php
namespace App\Http\Controllers;
use App\Models\Periodo;
use App\Http\Requests\StorePeriodoRequest;
use App\Http\Requests\UpdatePeriodoRequest;
use Illuminate\Support\Facades\Hash;
class PeriodoController extends Controller{
    public function index(){
        $periodo = Periodo::orderBy('id','asc')->paginate(10);
        return view('periodo.periodo', ['periodo'=>$periodo]);
    }
    public function create(){
        return view('periodo.nuevoPeriodo');
    }
    public function store(StorePeriodoRequest $request){
        $periodo=new Periodo();       
        $periodo->fech_ini=$request->fech_ini;
        $periodo->fech_term=$request->fech_term;
        $periodo->save();
        return redirect()->route('index.periodo');
    }
    public function show(Periodo $periodo){
        //
    }
    public function edit($id){
        $periodo = Periodo::find($id);
        return view('periodo.editarPeriodo',['periodo'=>$periodo]);
    }
    public function update(UpdatePeriodoRequest $request, $id){
        $periodos = Periodo::find($id);  
        $periodos->fech_ini=$request->fech_ini;
        $periodos->fech_term=$request->fech_term;
        $periodos->save();
        return redirect()->route('index.periodo');
    }
    public function destroy($id){
        $periodo = Periodo::find($id);
        Periodo::destroy($id);
        return redirect()->route('index.periodo');
    }
}
