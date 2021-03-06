<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recolector;
class RecolectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Recolector=Recolector::all();

        return \view('Recolector')->with('Recolector',$Recolector);
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
        //\dd($request);
        $Recolector = new Recolector;
        $d="";
        $Recolector->Nombre=$request->Nom_Recolector;
        foreach($request->Dias as $value){
            $d.=$value.',';
        }
        $Recolector->Dias=$d;
        $Recolector->save();
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
        return \view('EditarR')->with('RecolectorR',Recolector::find($id));
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
        $Recolector=Recolector::find($id);
        $d="";
        $Recolector->Nombre=$request->Nom_Recolector;
        foreach($request->Dias as $value){
            $d.=$value.',';
        }
        $Recolector->Dias=$d;
        $Recolector->save();
        return \redirect('/Recolector');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $R =Recolector::find($id);
       
        $R->destroy(array('id',$id));
        return \redirect('/Recolector');
    }
}
