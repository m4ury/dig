<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Paciente;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familia = Familia::paginate(8);
        return view('familia.index', compact('familia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familia = new Familia;
        return view('familia.create', compact('familia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($familia = Familia::create($request->except('_token'))){
          return redirect('familia')->with('info', 'Nueva familia creada!');
      }else{
          return view('familia.create', compact('familia'));
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Familia  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $familias = Familia::findOrFail($id);

        $pacientes = $familias->pacientes;

        return view('familia.show', compact( 'pacientes', 'familias'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function edit(Familia $familia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familia $familia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Familia  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Familia::destroy($id)) {
            return redirect('familia')->with('danger', 'Familia eliminada!');
        }else{
            return view('familia');
        }
    }
}
