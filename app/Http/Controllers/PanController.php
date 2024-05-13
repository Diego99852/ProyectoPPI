<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pan;

class PanController extends Controller
{
    public function create()
    {
        return view('pan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'min:2', 'max:50'],
            'precio' => ['required', 'numeric'],
        ]);
        
        pan::create($request->except('_token'));
        return redirect('/Pan');
    }

    public function index()
    {
        $Pan = Pan::all();
        return view('pan.index', ['pan' => $Pan]);
    }

    public function edit(Pan $Pan)
    {
        return view('pan.edit', compact('Pan'));
    }

    public function update(Request $request, Pan $Pan)
    {
        $validated = $request->validate([

            'nombre' => ['required', 'min:2', 'max:50'],
            'precio' => ['required', 'numeric'],
        ]);
        Pan::where('id', $Pan->id)->update($request->except('_token', '_method'));
        return redirect('/Pan');
    }

    public function destroy($id)
    {
        $pan_id = Pan::find($id);

        $pan_id->delete();

        return redirect('/Pan');
    }
    
    public function show(Request $request)
    {
        $Pan_id = $request -> input('id');
        $Pan = Pan::find($Pan_id);
        return view('pan.show', compact('Pan'));
    }
}