<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactomailable;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PanController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\MailController;


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


Route::middleware(['auth'])->group(function() {
    Route::get('/perfil', 'PerfilController@index');
    Route::get('/configuracion', 'ConfiguracionController@index');

});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/', function () {
        return view('inicio_sesion');
    })->name('inicio_sesion');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

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
    
    Route::get('/inicio-sesion', [EmpleadoController::class, 'mostrarFormularioInicioSesion'])->name('inicio.sesion');
    
    Route::post('/inicio-sesion', [EmpleadoController::class, 'iniciarSesion'])->name('login.empleado');
    
    Route::Resource('Pan',PanController::class);

    Route::Resource('Venta',VentaController::class)->parameters([
        'Venta' => 'Venta'
    ]);
    
    Route::get('/contactanos/index', [MailController::class, 'index'])->name('contactanos.index');
    Route::post('/contactanos/store', [MailController::class, 'store'])->name('contactanos.store');

});


