<?php

namespace App\Http\Controllers;

use App\Models\TipoServico;
use Illuminate\Http\Request;

class TipoServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoServicos = TipoServico::all(); 
        return view('tipo-servicos.index', compact('tipoServicos')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo-servicos.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0',
        ]);

        TipoServico::create($data); 
        return redirect()->route('tipo-servicos.index')->with('success', 'Tipo de Serviço criado com sucesso!');
    }

    
    
    public function edit(TipoServico $tipoServico)
    {
        return view('tipo-servicos.edit', compact('tipoServico')); 
    }                

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoServico $tipoServico)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0',
        ]);

        $tipoServico->update($data); 
        return redirect()->route('tipo-servicos.index')->with('success', 'Tipo de Serviço atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoServico $tipoServico)
    {
        $tipoServico->delete(); 
        return redirect()->route('tipo-servicos.index')->with('success', 'Tipo de Serviço excluído com sucesso!');
    }
}
