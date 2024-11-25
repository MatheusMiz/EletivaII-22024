<x-app-layout>
<h1>Cadastrar Pedido</h1>
<form action="{{ route('pedidos.store') }}" method="POST">
    @csrf
    <label>Cliente:</label>
    <select name="cliente_id">
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
        @endforeach
    </select>

    <label>Item:</label>
    <select name="item_id">
        @foreach($items as $item)
            <option value="{{ $item->id }}">{{ $item->nome }}</option>
        @endforeach
    </select>

    <label>Tipo de Serviço:</label>
    <select name="tipo_servico_id">
        @foreach($tipoServicos as $tipoServico)
            <option value="{{ $tipoServico->id }}">{{ $tipoServico->nome }}</option>
        @endforeach
    </select>

    <label>Data do Pedido:</label>
    <input type="date" name="data_pedido" required>

    <button type="submit">Salvar Pedido</button>
</form>

</x-app-layout>
