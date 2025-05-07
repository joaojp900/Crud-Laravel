<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected  $fillable =  ['Nome_Produto', 'Descricao', 'Estoque', 'Preco'];

    public function Regras(){
        return [
            'Nome_Produto' => 'required|string|min:5',
            'Estoque' => 'required|integer|digits_between:1,20',
            'Preco' => 'required|integer',
        ];
    }

    public function Feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório',
        ];
    }

    public function vendas()
    {
        return $this->hasMany(Vendas::class, 'produto_id');
    }

}
