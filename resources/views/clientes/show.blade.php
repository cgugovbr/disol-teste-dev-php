@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Cliente</h2>

    <!-- Exibe os detalhes do cliente -->
    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Telefones:</strong> {{ $cliente->telefones }}</p>
    <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
    <p><strong>Data de Aniversário:</strong> {{ $cliente->data_aniversario }}</p>
    <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
    <p><strong>Emails:</strong> {{ $cliente->emails }}</p>
</div>
@endsection
