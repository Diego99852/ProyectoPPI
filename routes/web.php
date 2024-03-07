<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados/crear', function () {
    return view('Crear_empleado');
});
Route::get('/empleados', function () {
    return view('inicio_empleados');
});

Route::get('/empleados/crear', [EmpleadoController::class, 'create'])->name('empleados.create');

Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');

Route::get('/empleados/index', [EmpleadoController::class, 'index'])->name('empleados.index');

Route::get('/empleados/edit/{empleado}', [EmpleadoController::class, 'edit'])->name('empleados.edit');

Route::post('/empleados/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');

Route::delete('/empleados/{empleado}', [EmpleadoController::class, 'delete'])->name('empleados.delete');

Route::get('/empleados/{empleado}', [EmpleadoController::class, 'show'])->name('empleados.show');

