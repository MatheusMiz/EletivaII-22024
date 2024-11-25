<x-app-layout>
    <h1>Cadastrar Novo Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>

        <button type="submit">Salvar</button>
    </form>
</x-app-layout>