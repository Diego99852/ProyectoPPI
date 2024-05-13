<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactomailable;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        return view('contactos.index');
    }
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);
        Mail::to('Diegoalejandrolopezcoronado@hotmail.com')
        ->send(new contactomailable($request->all()));

        session()->flash('info','mensaje enviado');

        return view('contactos.index');
    }
}
