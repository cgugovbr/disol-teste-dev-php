@extends('layouts.app')

@section('content')
<h2 class="mb-0">Cadastro de Clientes</h2>

<div class="d-flex justify-content-between align-items-center mb-3">
<a href="{{ route('clientes.create') }}" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
    <i class="fas fa-plus-circle fa-2x"></i>
</a>
<p>{{ count($clientes) }} registros encontrados</p>

</div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>
                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-primary">
                        <i class="fas fa-eye"></i> Visualizar
                    </a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-minus-circle"></i> Deletar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
