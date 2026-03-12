<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index()
{
    $ofertas = Oferta::all();
    
    return view('ofertas.index', compact('ofertas'));
}

    public function create()
    {
        return view('ofertas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'vigencia' => 'required|date|after:today',
            'tienda' => 'required',
            'precio_original' => 'required|numeric|min:0',
            'precio_descuento' => 'required|numeric|lt:precio_original',
        ]);

        Oferta::create($request->all());

        return redirect()->route('ofertas.index')->with('success', '¡Oferta creada exitosamente!');
    }

   public function show(Oferta $oferta)
    {
        return view('ofertas.show')->with(['offer' => $oferta]);
    }

    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit', compact('oferta'));
    }

    public function update(Request $request, Oferta $oferta)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'vigencia' => 'required|date|after:today',
            'tienda' => 'required',
            'precio_original' => 'required|numeric|min:0',
            'precio_descuento' => 'required|numeric|lt:precio_original',
        ]);

        $oferta->update($request->all());

        return redirect()->route('ofertas.show', $oferta)->with('success', 'Oferta actualizada correctamente');
    }

    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return redirect()->route('ofertas.index')->with('success', 'Oferta eliminada correctamente');
    }
}
