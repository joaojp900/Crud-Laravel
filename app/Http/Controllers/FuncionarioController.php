<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
     
    public function __construct(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;        
    }

    public function index(Funcionario $funcionario)
    {
        $funcionario = Funcionario::all();

        return view('Vendedor.index', compact('funcionario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Vendedor.create');
    }

    
    public function store(Request $request)
    {
        $request->validate($this->funcionario->Regras(), $this->funcionario->Feedback());

        $funcionario = $this->funcionario->create([
            'Nome' => $request->Nome,
            'Email' => $request->Email,
            'Senha' => bcrypt($request->Senha)
        ]);

        return redirect()->route('funcionario.index')->with('Sucess', 'Produto Cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        $funcionario = $this->produtos->find($id);

        if(!$funcionario === null){
            return 'Erro o recurso está vazio';
        }
        return view('Funcionario.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $funcionario = Funcionario::find($id);

        return view('Vendedor.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);

        $request->validate($this->funcionario->Regras(), $this->funcionario->Feedback());

        if(!$funcionario){
            return redirect()->route('Vendedor.index')->with('error', 'Produto não encontrado!');
        }

        $funcionario->update($request->all());

        return redirect()->route('funcionario.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $funcionario = $this->funcionario->find($id);

        if($funcionario === null){
            return 'Impossivel realizar a exclusão. O recurso solicitado não existe';
        }

        $funcionario->delete();
        return redirect()->route('funcionario.index')->with('Sucess', 'Produto Cadastrado com sucesso');
    }
}
