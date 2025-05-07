<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Fornecedor;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\View\ViewFinderInterface;

class ProdutosController extends Controller
{
    
    public function __construct(Produtos $produtos)
    {
            $this->produtos = $produtos;
    }

    public function index(Produtos $produtos)
    {
         $produtos  = Produtos::all();

        return view('Produtos.welcome', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
         return view('Produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->produtos->Regras(), $this->produtos->Feedback());
        
        $produtos = $this->produtos->create([
            'Nome_Produto' => $request->Nome_Produto, 
            'Descricao' => $request->Descricao,
            'Estoque' => $request->Estoque, 
            'Preco' => $request->Preco,  
        ]);

        return redirect()->route('Produtos.welcome')->with('Sucess', 'Produto Cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produtos $produtos, $id)
    {
        $produtos = $this->produtos->find($id);
      
        if(!$produtos === null){
            return 'Erro o Recurso esta vazio';
        }

        return view('Produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
            $produto = Produtos::find($id); // Retorna um único produto

            return view('Produtos.edit', compact('produto'));

    }

    public function update(Request $request, $id) {
        // Busca o produto pelo ID
        $produtos = Produtos::find($id);
    
        $request->validate($this->produtos->Regras(), $this->produtos->Feedback());
        
        // Se não encontrar, retorna erro
        if (!$produtos) {
            return redirect()->route('Produtos.index')->with('error', 'Produto não encontrado!');
        }
    
        // Atualiza os dados do produto
        $produtos->update($request->all());
    
        return redirect()->route('Produtos.welcome')->with('success', 'Produto atualizado com sucesso!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produto = $this->produtos->find($id);
    
        if (!$produto) {
            return redirect()->route('Produtos.create')->with('error', 'Produto não encontrado.');
        }
    
        $produto->delete();
        return redirect()->route('Produtos.welcome')->with('success', 'Produto deletado com sucesso.');
    }
    
}
