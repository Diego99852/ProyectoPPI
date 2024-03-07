<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function create()
    {
        return view('Crear_empleado');
    }

    public function store(Request $request)
    {
        $request->validate([
            'apellido1' => ['required', 'min:2', 'max:50'],
            'apellido2' => ['required', 'min:2', 'max:50'],
            'nombrepila' =>['required', 'min:2', 'max:50'],
            'sueldo' => ['required', 'numeric'],
        ]);

        Empleado::create($request->all());
        return view('inicio_empleados');
    }
    
    public function index()
    {
        $empleados = Empleado::all();
        return view('index_empleados', ['empleados' => $empleados]);

    }
    public function edit(Empleado $empleado)
    {
        return view('edit_empleado', compact('empleado'));
    }


    public function update(Request $request, Empleado $empleado)
    {
        $validated = $request->validate([

            'apellido1' => ['required', 'min:2', 'max:50'],
            'apellido2' => ['required', 'min:2', 'max:50'],
            'nombrepila' =>['required', 'min:2', 'max:50'],
            'sueldo' => ['required', 'numeric'],
        ]);
        Empleado::where('id', $empleado->id)->update($request->except('_token', '_method'));
        return view('inicio_empleados');
    }
    public function delete($id)
    {
        $empleado_id = Empleado::find($id);

        $empleado_id->delete();

        return view('inicio_empleados');
    }
    
    public function show(Request $request){

        $empleado_id = $request -> input('id');
        $empleado = Empleado::find($empleado_id);

        return view('show_empleado', compact('empleado'));

    }

    
}
