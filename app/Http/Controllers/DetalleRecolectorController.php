<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_recolector;
use App\PuntoReciclajeModel;
use App\Recolector;

class DetalleRecolectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Detalle_R=detalle_recolector::all();
        $Punto = PuntoReciclajeModel::all();
        $Recolector=Recolector::all();

        return \view('DetalleRecolector')->with('Detalle_R',$Detalle_R)->with('Punto',$Punto)->with('Recolector',$Recolector);
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
        $DetalleR = new detalle_recolector;
        
        $DetalleR->id_punto_reciclaje = $request->Puntos;
        $DetalleR->id_recolectores = $request->Recolector;
        $DetalleR->save();
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
