<x-app-layout>
    <h1>Editar Tipo de Serviço</h1>
    <form action="{{ route('tipo-servicos.update', $tipoServico) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $tipoServico->nome }}" required>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco" value="{{ $tipoServico->preco }}" required>

        <button type="submit">Atualizar</button>
    </form>
</x-app-layout>