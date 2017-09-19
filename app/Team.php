<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // alterando tabela padrão
    protected $table = 'users_projs';

    protected $fillable = [
        'descricao', 'user_id', 'proj_id',
    ];

    // ignorando colunas updated_at e created_at
    public $timestamps = false;
}
