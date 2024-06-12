<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $table = 'imoveis';
    protected $fillable = [
        'titulo',
        'descricao',
        'preco',
        'logradouro',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'tipo',
        'quartos',
        'banheiros',
        'area_terreno',
        'area_construida',
        'status',
        'tipo_negociacao',
        'caracteristicas',
        'imagens',
    ];

    protected $casts = [
        'caracteristicas' => 'array',
        'imagens' => 'array',
    ];
}
