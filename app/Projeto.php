<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'titulo','descricao', 'dt_inicio', 'dt_fim',
    ];

    // ignorando colunas updated_at e created_at
    public $timestamps = false;
    
}
