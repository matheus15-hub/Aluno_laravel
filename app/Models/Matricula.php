<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matricula extends Model
{
    protected $fillable = [
        'aluno_id',
        'turma_id',
        'nota',
    ];

        public function aluno(): BelongsTo
        {
            return $this->belongsTo(Aluno::class);
        }

    public function turma(): BelongsTo
        {
            return $this->belongsTo(Turma::class);
        }
}