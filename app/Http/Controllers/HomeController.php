<?php
namespace App\Http\Controllers;
use App\Models\Alumnos;
use App\Models\Docente;
use App\Models\Caja;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }
//  return view('mainCaja');
      // return view('mainAdministrador');
   //  return view('mainEstudiante');


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
       
   $id= User::where('id','=',Auth::user()->id)->first();
   $docente=Docente::where('id_users','=',Auth::user()->id)->first();
   $caja=Caja::where('id_users','=',Auth::user()->id)->first();     
   
   if(Auth::user()->id_rol=='1'){
      
      return view('mainAdministrador', ['id'=>$id]);

   }else if(Auth::user()->id_rol=='2'){
        
      return view('mainEstudiante',['id'=>$id]);
      
   }else if(Auth::user()->id_rol=='4'){

      return view('mainCaja',['id'=>$id]);

   }else{
       
      return view('mainDocente',['id'=>$id]);

   }
  }  
}


