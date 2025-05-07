<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected  $fillable =  ['Nome','Email','Senha'];

    public function Regras(){
        return [
            'Nome' => 'required|string|min:5',
            'Email' => 'required|email|',
            'Senha' => 'required|string',
        ];
    }

    public function Feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório',
        ];
    }

}
