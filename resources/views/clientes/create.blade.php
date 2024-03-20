@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row-justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Novo Cliente </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('clientes.store') }}">
                        @csrf 
                        @method('POST')

                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>   
                        
                        <div class="form-group">
                            <label for="telefones">Telefones:</label>
                            <input type="text" name="telefones" class="form-control" required>
                        </div>   

                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" class="form-control" required>
                        </div>   

                        <div class="form-group">
                            <label for="data_aniversario">Data de Aniversário:</label>
                            <input type="text" name="data_aniversario" class="form-control" required>
                        </div>   

                        <div class="form-group">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="emails">Emails:</label>
                            <input type="text" name="emails" class="form-control" required>
                        </div>   

                        <button type="submit" class="btn btn-primary">Salvar Cliente</button>
                    </form>    
                </div>
            </div>
        </div>
    </div>
@endsection
