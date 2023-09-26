<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    //guardar
    public function store(Request $request)
    {
        $libro = Libro::create($request->all());

        return redirect()->route('libros.index');
    }
}
