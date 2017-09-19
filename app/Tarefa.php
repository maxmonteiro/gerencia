<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao', 'etapa', 'prioridade', 'ordem', 
            'comentario', 'dt_criacao', 'proejto_id',
    ];

    // ignorando colunas updated_at e created_at
    public $timestamps = false;
}
