<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = Categorias::orderBy('created_at', 'DESC')->get();
  
        return view('categorias.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categorias::create($request->all());
 
        return redirect()->route('categorias')->with('success', 'categoria agregada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categorias::findOrFail($id);
  
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categorias::findOrFail($id);
  
        return view('categorias.edit', compact('categoria'));
    }
  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categorias::findOrFail($id);
  
        $categoria->update($request->all());
  
        return redirect()->route('categorias')->with('success', 'categoria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categorias::findOrFail($id);
  
        $categoria->delete();
  
        return redirect()->route('categorias')->with('success', 'categoria eliminado exitosamente
');
    }
}
