<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'documento' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'direccion' => 'required',
            'rol' => 'required',
            'password' => 'required',
        ]);

        $Cliente = new Cliente;
        $Cliente->documento = $request->documento;
        $Cliente->nombre = $request->nombre;
        $Cliente->apellido = $request->apellido;
        $Cliente->telefono = $request->telefono;
        $Cliente->email = $request->email;
        $Cliente->direccion = $request->direccion;
        $Cliente->rol = $request->rol;
        $Cliente->password = bcrypt($request->password);
        $Cliente->save();

        return redirect()->back()->with('success', 'Cliente agregado exitosamente.');
    }

}
