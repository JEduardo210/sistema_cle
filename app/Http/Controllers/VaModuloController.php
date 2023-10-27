<?php

namespace App\Http\Controllers;

use App\Models\Va_Modulo;
use App\Http\Requests\StoreVa_ModuloRequest;
use App\Http\Requests\UpdateVa_ModuloRequest;

class VaModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $va_modulos = Va_Modulo::orderBy('id','asc')->paginate(10);
        return view('va_modulos.va_modulos', ['va_modulos'=>$va_modulos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVa_ModuloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Va_Modulo $va_Modulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Va_Modulo $va_Modulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVa_ModuloRequest $request, Va_Modulo $va_Modulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Va_Modulo $va_Modulo)
    {
        //
    }
}
