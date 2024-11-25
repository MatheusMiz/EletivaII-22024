<x-app-layout>
    <h1>Cadastrar Novo Tipo de Serviço</h1>
    <form action="{{ route('tipo-servicos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco" required>

        <button type="submit">Salvar</button>
    </form>
</x-app-layout>