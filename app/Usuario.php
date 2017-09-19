<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    // alterando tabela padrão
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    // ignorando colunas updated_at e created_at
    public $timestamps = false;
}
