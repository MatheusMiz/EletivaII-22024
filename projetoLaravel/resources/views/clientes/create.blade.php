<x-app-layout>

    
    <h1>Cadastrar Novo Cliente</h1>
    <form action="/clientes" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required>
        <button type="submit">Salvar</button>
    </form>

</x-app-layout>