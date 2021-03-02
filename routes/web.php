<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacunaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RestWebServiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [VacunaController::class, 'index']);
Route::get('/vacunas', [VacunaController::class, 'index'])->name('vacuna.index');
Route::get('/vacunas/{vacuna}', [VacunaController::class, 'show'])->name('vacunas.show');

Route::get('/pacientes/{paciente}/vacunar', [PacienteController::class, 'edit'])->name('pacientes.vacunar');



Route::post('/api/vacunas/crear', [RestWebServiceController::class, 'store']);

Route::get('/api/vacunas/{idPaciente}', [RestWebServiceController::class, 'mostrar']);





Route::get('/pacientes/buscador', [PacienteController::class, 'buscar'])->name('pacientes.buscador');

Route::post('pacientes/busquedaAjax', [PacienteController::class,'busquedaAjax']);
