<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonaJuridica;

class PersonaJuridicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.personajuridica.personajuridica');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personajuridica = PersonaJuridica::query_PersonaJuridica();
        return Response()->json($personajuridica->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PersonaJuridica::create($request->all());
        return Response()->json([
            'mensaje'=>'Creado'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personaEditjuridica = PersonaJuridica::query_Edit_PersonaJuridica($id);
        return Response()->json($personaEditjuridica->toArray());
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
        $personajuridica = PersonaJuridica::find($id);
        $personajuridica->fill($request->all());
        $personajuridica->save();
        return Response()->json([
            'mensaje'=>'Actualizado'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        PersonaJuridica::destroy($id);
        return Response()->json([
            'mensaje'=>'Eliminado'
            ]);   
    }
}
