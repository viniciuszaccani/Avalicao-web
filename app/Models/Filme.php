<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Filme extends Model
{
    protected $fillable = [
        'titulo',
        'ano',
        'genero',
        'diretor_id'

    ];

    public function diretor(): BelongsTo
    {
        return $this->belongsTo(diretor::class);
    }

}
