<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|min:3',
            'email' => 'required|email',
            'mensaje' => 'required|min:10',
        ]);

        // Guardar en la base de datos
        Contacto::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
        ]);

        
        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
    public function index()
{
    $mensajes = Contacto::latest()->get(); 
    return view('mensajes', compact('mensajes')); 
}


}
