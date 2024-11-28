<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Diretor extends Model
{
    protected $fillable = [
        'name',
        'descricao',
        'nascimento'

    ];


    public function filme(): HasMany
    {
        return $this->hasMany(filme::class);
    }

}
