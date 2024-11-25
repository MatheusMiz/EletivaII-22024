<x-app-layout>
<h1>Tipos de Serviço</h1>
    <a href="/tipo-servicos/create">Cadastrar Novo Serviço</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipoServicos as $tipoServico)
            <tr>
                <td>{{ $tipoServico->nome }}</td>
                <td>{{ $tipoServico->preco }}</td>
                <td>
                    <a href="{{ route('tipo-servicos.edit', $tipoServico) }}">Editar</a>
                    <form action="{{ route('tipo-servicos.destroy', $tipoServico) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Deseja realmente excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</x-app-layout>