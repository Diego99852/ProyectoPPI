<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pan;
use App\Models\Venta;

class VentaController extends Controller
{
    public function create()
    {   
        $Pan = Pan::all();
        return view('Venta.create', compact('Pan'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'Total' => ['required', 'numeric'],
            'Fecha' => ['required', 'date'],
        ]);

        $Venta = Venta::create($request->except('_token'));

        if ($request->has('Pan')) {
            $PanSeleccionado = $request->input('Pan');
            foreach ($PanSeleccionado as $PanId) {
                $Venta->Pan()->attach($PanId);
            }
        }
        
        return redirect('/Venta');
    }

    public function index()
    {
        $Venta = Venta::with('Pan')->get();
        return view('venta.index', ['venta' => $Venta]);
    }

    public function edit(Venta $Venta)
    {
        $Pan = Pan::all();
        return view('Venta.edit', ['Venta' => $Venta, 'Pan' => $Pan]);
    }

    public function update(Request $request, Venta $Venta)
    {
        
        $validated = $request->validate([
            'Total' => ['required', 'numeric'],
            'Fecha' => ['required', 'date'],
        ]);

        Venta::where('id', $Venta->id)->update($request->except('_token', '_method','Pan'));

        if ($request->has('Pan')) {
            $PanSeleccionado = $request->input('Pan');
            foreach ($PanSeleccionado as $PanId) {
                $Venta->Pan()->attach($PanId);
            }
        }
        else{
            $Venta->Pan()->detach();
        }

        return redirect('/Venta');
    }

    public function destroy($id)
    {
        $Venta_id = Venta::find($id);

        $Venta_id->delete();

        return redirect('/Venta');
    }
    
    public function show(Request $request)
    {
        $Venta_id = $request -> input('id');
        $Venta = Venta::find($Venta_id);
        return view('Venta.show', compact('Venta'));
    }
}
