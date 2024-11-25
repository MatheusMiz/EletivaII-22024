<x-app-layout>
    <h1>Lista de Pedidos</h1>
    <a href="/pedidos/create">Cadastrar novo Pedido</a>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Item</th>
                <th>Tipo de Serviço</th>
                <th>Data do Pedido</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->cliente->nome }}</td>
                    <td>{{ $pedido->item->nome }}</td>
                    <td>{{ $pedido->tipoServico->nome }}</td>
                    <td>{{ \Carbon\Carbon::parse($pedido->data_pedido)->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
