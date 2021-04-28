<?php

namespace App\Http\Controllers;

use App\Models\cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    

    public function index()
    {
        $Datos['Citas']=cita::paginate(10);
        return view ('Citas.home', $Datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Citas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $DatosCita = $request->except('_token');

        if($request->hasFile('Icono')){
            $DatosCita['Icono']=$request->file('Icono')->store('upload', 'public');
        }

        cita::insert($DatosCita);

        $Datos['Citas']=cita::paginate(10);
        return view ('Citas.home', $Datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(cita $cita)
    {
        //
    }

    public function ShowCitasList()
    {
        $Datos['Citas']=cita::paginate(10);
        return view ('Citas.home', $Datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citaData=cita::findOrFail($id);
        return view ('Citas.edit', compact('citaData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $DatosCita = $request->except('_token', '_method');
        if($request->hasFile('Icono')){
            $citaData=cita::findOrFail($id);
            Storage::delete('public/.$citaData->icono');
            
            $DatosCita['Icono']=$request->file('Icono')->store('upload', 'public');
        }


        cita::where('id', '=', $id)->update($DatosCita);

        $Datos['Citas']=cita::paginate(10);
        return view ('Citas.home', $Datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $citaData=cita::findOrFail($id);
        if(Storage::delete('public/'.$citaData->icono)){
            cita::destroy($id);
        }

        
        return redirect('citas');
    }
}
