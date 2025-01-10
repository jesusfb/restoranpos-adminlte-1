<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PlatilloRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $platillos = Platillo::paginate();

        return view('platillos.index', compact('platillos'))
            ->with('i', ($request->input('page', 1) - 1) * $platillos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $platillo = new Platillo();

        return view('platillos.create', compact('platillo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlatilloRequest $request): RedirectResponse
    {
        Platillo::create($request->validated());

        return Redirect::route('platillos.index')
            ->with('success', 'Platillo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $platillo = Platillo::find($id);

        return view('platillos.show', compact('platillo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $platillo = Platillo::find($id);

        return view('platillos.edit', compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlatilloRequest $request, Platillo $platillo): RedirectResponse
    {
        $platillo->update($request->validated());

        return Redirect::route('platillos')
            ->with('success', 'Platillo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Platillo::find($id)->delete();

        return Redirect::route('platillos.index')
            ->with('success', 'Platillo deleted successfully');
    }
}
