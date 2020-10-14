<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PuntoReciclajeModel;

class PuntoReciclajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PReciclaje=PuntoReciclajeModel::all();

        return \view('PuntoReciclaje')->with('PReciclaje',$PReciclaje);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Punto = new PuntoReciclajeModel();
        $Punto->TipoBasura=$request->Tbasural;
        $Punto->direccion=$request->DireccionL;
        $Punto->HorarioApertura=$request->HaperturaL;
        $Punto->HorarioCierre=$request->HcierreL;
        $Punto->save();
        return \redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
