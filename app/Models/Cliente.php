<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected  $fillable =  ['Nome', 'Email', 'Cpf', 'Senha'];

    public function Regras(){
        return [
            'Nome' => 'required|string|min:5',
            'Email' => 'required|email|',
            'Cpf' => 'required|integer',
            'Senha' => 'required|string',
        ];
    }

    public function Feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório',
        ];
    }

    
public function getCpfFormatadoAttribute()
{
    return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $this->Cpf);
}

}
