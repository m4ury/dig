<?php

namespace App\Http\Controllers;

use App\Establecimiento;
use App\Familia;
use App\Http\Requests\CreatePacienteRequest;
use App\Http\Requests\EditPacienteRequest;
use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = Paciente::paginate(10);
        return view('paciente.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente;

        return view('paciente.create', compact( 'paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePacienteRequest $request)
    {
        if($paciente = Paciente::create($request->all())){
            return redirect('paciente')->with('info', 'Nuevo paciente creado!');
        }else{
            return view('paciente.create', compact('paciente'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);

        $control = $paciente->controls()->orderBy('created_at', 'desc')->take(5)->get();

        $patologia = $paciente->patologias()->pluck('nombre', 'patologia_id');

        $complicacion = $paciente->complicacions()->pluck('nombre', 'complicacion_id');

        return view('paciente.show', compact('paciente', 'patologia', 'complicacion', 'control'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);

        //$establecimiento = $paciente->establecimiento->pluck('id', 'nombre');

        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\EditPacienteRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPacienteRequest $request, $id)
    {
        $paciente = Paciente::findOrFail($id);

        if($paciente->update($request->all())){
            return redirect('paciente')->with('info', 'El paciente con rut '.$request->rut.' ha sido modificado!');
        }else{
            return view('paciente.edit', compact('paciente'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Paciente::destroy($id)) {
            return redirect('paciente')->with('danger', 'El paciente ha sido eliminado!');
        }else{
            return view('paciente');
        }
    }
}
