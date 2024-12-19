<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Clientes::orderBy('created_at', 'DESC')->get();
  
        return view('clientes.index', compact('cliente'));
    }

    public function imprimir()
    {
        $cliente = Clientes::orderBy('created_at', 'DESC')->get();       
        return view('clientes.imprimir', compact('cliente'));
    }

    public function imprimirpdf()
    {
        $cliente = Clientes::orderBy('created_at', 'DESC')->get();
        $data = ['order' => $cliente];        
        $pdf = Pdf::loadView('clientes.imprimir', $data);
        return $pdf->download('invoice.pdf');          
    }
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Clientes::create($request->all());
 
        return redirect()->route('clientes')->with('success', 'cliente agregada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Clientes::findOrFail($id);
  
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Clientes::findOrFail($id);
  
        return view('clientes.edit', compact('cliente'));
    }
  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Clientes::findOrFail($id);
  
        $cliente->update($request->all());
  
        return redirect()->route('clientes')->with('success', 'cliente updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Clientes::findOrFail($id);
  
        $cliente->delete();
  
        return redirect()->route('clientes')->with('success', 'cliente eliminado exitosamente
');
    }
}
