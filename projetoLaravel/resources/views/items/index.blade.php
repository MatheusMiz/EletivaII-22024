<x-app-layout>
  <h1>Itens (Tipos de Roupa)</h1>
    <a href="/items/create">Cadastrar Novo Item</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->descricao }}</td>
                <td>
                    <a href="{{ route('items.edit', $item) }}">Editar</a>
                    <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>