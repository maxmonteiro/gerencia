<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'ref','titulo','descricao', 'prioridade', 'projeto_id',
    ];
    
    // ignorando colunas updated_at e created_at
    public $timestamps = false;
}
