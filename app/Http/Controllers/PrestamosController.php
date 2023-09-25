<?php

namespace App\Http\Controllers;

//xd qu
use App\Models\prestamos;
use Illuminate\Http\Request;

//xd qu
class PrestamosController extends Controller
{
    public function index()
    {
        // Renderiza la vista del formulario
        return view('prestamos.registrar');
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario
        $this->validate($request, [
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'fecha' => 'required',
        ]);

        // Guarda los datos en la base de datos
        $prestamo = new prestamos();
        $prestamo->nombres = $request->input('nombres');
        $prestamo->apellidos = $request->input('apellidos');
        $prestamo->email = $request->input('email');
        $prestamo->telefono = $request->input('telefono');
        $prestamo->direccion = $request->input('direccion');
        $prestamo->fecha = $request->input('fecha');
        $prestamo->save();

        // Redirige al usuario a la página de listado de préstamos
        return redirect()->route('prestamos.index')->with('message', 'El préstamo se ha registrado correctamente.');
    }
}
