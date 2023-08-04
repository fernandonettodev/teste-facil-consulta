<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Models\Medico;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'cpf' => 'required|string|max:20|unique:pacientes',
            'celular' => 'required|string|max:20',
        ]);

        $paciente = Paciente::create($request->only('nome', 'cpf', 'celular'));

        return response()->json($paciente);
    }

    public function update(Request $request, $id_paciente)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'celular' => 'required|string|max:20',
        ]);

        $paciente = Paciente::findOrFail($id_paciente);
        $paciente->update($request->only('nome', 'celular'));

        return response()->json($paciente);
    }

    public function pacientesPorMedico($id_medico)
    {
        $medico = Medico::findOrFail($id_medico);
        $pacientes = $medico->pacientes;
        return response()->json($pacientes);
    }

    
}
