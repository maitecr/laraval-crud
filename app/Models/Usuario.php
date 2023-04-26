<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario',
        'senha',
    ];

    public $rules = [
        'usuario' => 'required|min:3|max:100',
        'senha' => 'required|min:8|max:8',
    ];

    public $messages = [
        'usuario.required' => 'Campo obrigatório',
        'usuario.min' => 'Preencher de 3 a 100 caracteres',
        'senha.required' => 'Campo obrigatório',
        'senha.min' => 'Mínimo 8 caracteres',
        'senha.max' => 'Máximo 8 caracteres',
    ];

    protected function senha(): Attribute
    {
       return Attribute::make(
            set: fn($value) => bcrypt($value),
        );
    }


}
