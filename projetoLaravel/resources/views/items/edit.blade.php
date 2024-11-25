<x-app-layout>
    <h1>Editar Item</h1>
    <form action="{{ route('items.update', $item) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $item->nome }}" required>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ $item->descricao }}</textarea>

        <button type="submit">Atualizar</button>
    </form>
</x-app-layout>
