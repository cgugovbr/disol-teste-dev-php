@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Cliente</h2>

    <!-- Formulário de edição do cliente -->
    <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
        @csrf 
        @method('PUT')

        <!-- Campos do formulário -->
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $cliente->nome }}" required>
        </div>   
        
        <div class="form-group">
            <label for="telefones">Telefones:</label>
            <input type="text" name="telefones" class="form-control" value="{{ $cliente->telefones }}" required>
        </div>   

        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" class="form-control" value="{{ $cliente->cpf }}" required>
        </div>   

        <div class="form-group">
            <label for="data_aniversario">Data de Aniversário:</label>
            <input type="text" name="data_aniversario" class="form-control" value="{{ $cliente->data_aniversario }}" required>
        </div>   

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" class="form-control" value="{{ $cliente->endereco }}" required>
        </div>

        <div class="form-group">
            <label for="emails">Emails:</label>
            <input type="text" name="emails" class="form-control" value="{{ $cliente->emails }}" required>
        </div>   

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>
@endsection
