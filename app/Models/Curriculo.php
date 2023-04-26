<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'sobrenome',
        'cidade',
        'nome_arquivo',
    ];

    public $rules = [
        'nome' => 'required|min:3|max:100',
        'sobrenome' => 'required|min:3|max:100',
        'cidade' => 'required|min:3|max:100',
    ];

    public $messages = [
        'nome.required' => 'Campo obrigatório',
        'nome.min' => 'Preencher de 3 a 100 caracteres',
        'sobrenome.required' => 'Campo obrigatório',
        'sobrenome.min' => 'Preencher de 3 a 100 caracteres',
        'cidade.required' => 'Campo obrigatório',
        'cidade.min' => 'Preencher de 3 a 100 caracteres',
    ];
}
