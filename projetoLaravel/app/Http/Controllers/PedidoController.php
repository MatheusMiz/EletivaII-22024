<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\TipoServico;
use App\Models\Item;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
{
    $clientes = Cliente::all();
    $items = Item::all();
    $tipoServicos = TipoServico::all();
    return view('pedidos.create', compact('clientes', 'items', 'tipoServicos'));
}
    public function index()
    {
        // Buscar todos os pedidos
        $pedidos = Pedido::with(['cliente', 'item', 'tipoServico'])->get();
        
        // Retornar a view 'pedidos.index' com os pedidos e uma possível mensagem de sucesso
        return view('pedidos.index', compact('pedidos'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'item_id' => 'required|exists:items,id',
            'tipo_servico_id' => 'required|exists:tipo_servicos,id',
            'data_pedido' => 'required|date',
        ]);

        Pedido::create($data);
        return redirect()->route('pedidos.index')->with('success', 'Pedido registrado com sucesso!');

    }

}
