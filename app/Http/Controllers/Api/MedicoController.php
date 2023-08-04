<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return response()->json($medicos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'especialidade' => 'required|string|max:100',
            'cidade_id' => 'required|exists:cidades,id',
        ]);

        $medico = Medico::create([
            'nome' => $request->input('nome'),
            'especialidade' => $request->input('especialidade'),
            'cidade_id' => $request->input('cidade_id'),
        ]);

        return response()->json($medico, 201);
    }

    public function medicosPorCidade($id_cidade)
    {
        $medicos = Medico::where('cidade_id', $id_cidade)->get();
        return response()->json($medicos);
    }

    public function storePacientePorMedico($id_medico, Request $request)
    {
        $request->validate([
            'medico_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',
        ]);

        $medico = Medico::findOrFail($id_medico);
        $paciente_id = $request->input('paciente_id');
        $medico->pacientes()->attach($paciente_id);

        $medicoComPaciente = Medico::with('pacientes')->find($id_medico);

        return response()->json($medicoComPaciente);
    }
}
