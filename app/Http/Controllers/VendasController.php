<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\Vendas;
use Illuminate\Http\Request;

class VendasController extends Controller
{
     
    public function __construct(Vendas $vendas)
    {
        $this->vendas = $vendas;
    }

    public function index(Vendas $vendas)
    {
        $vendas = Vendas::all();

        return view('Vendas.index', compact('vendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produtos = Produtos::all();

        return view('Vendas.create', compact('produtos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $produto = Produtos::findOrFail($request->Produto_id);

        if ($produto->Estoque < $request->Quantidade) {
            return back()->with('erro', 'Estoque insuficiente.');
        }
        
        $produto->Estoque -= $request->Quantidade;
        $produto->save();
        
        $vendas = $this->vendas->create([
            'Produto_id' => $request->Produto_id, // isso precisa estar aqui
            'Cliente'    => $request->Nome_Cliente,
            'Produtos'   => $produto->Nome_Produto, // pegando o nome do produto do banco
            'Quantidade' => $request->Quantidade
        ]);
        
        return redirect()->route('vendas.index');
        
    }

     
    public function destroy($id)
    {
        $vendas = $this->vendas->find($id);

        if(!$vendas){
            return redirect()->route('vendas.create');
        }

        $vendas->delete();
        return redirect()->route('vendas.index');
    }
}
