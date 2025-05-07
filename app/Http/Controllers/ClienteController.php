<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index(Cliente $cliente)
    {
        $cliente = Cliente::all();

        return view('Cliente.index', compact('cliente'));
    }

    public function create()
    {
        return view('Cliente.create');
    }

    
    public function store(Request $request)
    {
        $request->validate($this->cliente->Regras(), $this->cliente->Feedback());

        $cliente = $this->cliente->create([
            'Nome' => $request->Nome,
            'Email' => $request->Email,
            'Cpf' => $request->Cpf,
            'Senha' => bcrypt($request->Senha)
        ]);

        return redirect()->route('cliente.index')->with('sucess', 'Cliente Cadastrado');

    }

    
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('Cliente.edit', compact('cliente'));
    }

    
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $request->validate($this->cliente->Regras(), $this->cliente->Feedback());

        if(!$cliente){
            return redirect()->route('Cliente.index');
        }

        $cliente->update($request->all());
        return redirect()->route('cliente.index');
}

    
    public function destroy($id)
    {
        $cliente = $this->cliente->find($id);
    
        if (!$cliente === null) {
            return redirect()->route('cliente.create')->with('error', 'Produto não encontrado.');
        }
    
        $cliente->delete();
        return redirect()->route('cliente.index')->with('success', 'Produto deletado com sucesso.');
    }
    
}
