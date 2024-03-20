<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Carbon\Carbon; 

class ClienteController extends Controller
{
    // Create (Criar)
    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefones' => 'required',
            'cpf' => 'required',
            'data_aniversario' => 'required|date_format:d/m/Y',
            'endereco' => 'required',
            'emails' => 'required',
        ]);
    
        $cliente = new Client;
        $cliente->nome = $request->nome;
        $cliente->telefones = $request->telefones;
        $cliente->cpf = $request->cpf;
        $cliente->data_aniversario = Carbon::createFromFormat('d/m/Y', $request->data_aniversario)->format('Y-m-d');
        $cliente->endereco = $request->endereco;
        $cliente->emails = $request->emails;
        $cliente->save();
    
        return redirect()->route('clientes.index');
    }
    

    // Read (Ler)
    public function index()
    {
        $clientes = Client::all();
        return view('clientes.index', compact('clientes'));
    }

    public function show($id)
    {
    $cliente = Client::find($id);
    return view('clientes.show', compact('cliente'));
    }

    // Update (Atualizar)
    public function edit($id)
    {
        $cliente = Client::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Client::find($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    // Delete (Excluir)
    public function destroy($id)
    {
        $cliente = Client::find($id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
