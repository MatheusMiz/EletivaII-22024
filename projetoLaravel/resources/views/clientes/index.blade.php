@extends('layout')

@section('content')
<h1>Clientes</h1>
<a href="{{ route('clientes.create') }}">Cadastrar Novo Cliente</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
