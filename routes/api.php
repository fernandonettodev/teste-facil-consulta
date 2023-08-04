<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CidadeController;
use App\Http\Controllers\Api\MedicoController;
use App\Http\Controllers\Api\PacienteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:api');


Route::get('/cidades', [CidadeController::class, 'index']);

Route::get('/medicos', [MedicoController::class, 'index']);
Route::get('/cidades/{id_cidade}/medicos', [MedicoController::class, 'medicosPorCidade']);

Route::group(['middleware' => 'auth:api'], function () {
    // Rotas protegidas que exigem autenticação JWT
    Route::post('/medicos', [MedicoController::class, 'store']);
    Route::post('/medicos/{id_medico}/pacientes', [MedicoController::class, 'storePacientePorMedico']);
    Route::get('/medicos/{id_medico}/pacientes', [PacienteController::class, 'pacientesPorMedico']);

    Route::put('/pacientes/{id_paciente}', [PacienteController::class, 'update']);
    Route::post('/pacientes', [PacienteController::class, 'store']);
});