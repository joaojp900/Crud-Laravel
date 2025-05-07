<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = ['Id','Cliente', 'Produto_id', 'Produtos', 'Quantidade'];

    public function Regras(){
        return [
            'Cliente' => 'required|string|min:5',
            'Produtos' => 'required|string|min:5',
            'Quantidade' => 'required|integer',
        ];
    }

    public function Feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório',
        ];
    }


    public function produto()
    {
        return $this->belongsTo(Produtos::class, 'Prooduto_id');
    }
}
