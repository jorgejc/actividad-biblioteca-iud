<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    public function index() {
        $autores = Autor::all();
        return view('Autores.Listado', ['autores' => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Autores.Crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autor = new Autor($request->all());
//        dd($request->all());
        $autor->save();
        return redirect()->route('autores');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        return view('Autores.Editar', ['autor' => $autor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        $autor->fill($request->all());
        $autor->save();
        return redirect()->route('autores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
