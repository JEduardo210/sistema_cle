<?php
namespace App\Http\Controllers;
use App\Models\Va_Pago;
use App\Http\Requests\StoreVa_PagoRequest;
use App\Http\Requests\UpdateVa_PagoRequest;
class VaPagoController extends Controller{
    public function index(){
        $va_pagos = Va_Pago::orderBy('id','asc')->paginate(10);
        return view('va_pagos.va_pago', ['va_pagos'=>$va_pagos]);
    }
    public function create(){
        //
    }
    public function store(StoreVa_PagoRequest $request){
        //
    }
    public function show(Va_Pago $va_Pago){
        //
    }
    public function edit(Va_Pago $va_Pago){
        //
    }
    public function update(UpdateVa_PagoRequest $request, Va_Pago $va_Pago){
        //
    }
    public function destroy(Va_Pago $va_Pago){
        //
    }
}
