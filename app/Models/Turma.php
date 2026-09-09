<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turma extends Model
{
    protected $fillable = [
        'nome',
        'professor_id',
        'curso_id',
    ];

        public function professor(): BelongsTo
        {
            return $this->belongsTo(Professor::class);
        }

    public function curso(): BelongsTo
        {
            return $this->belongsTo(Curso::class);
        }

    public function matriculas(): HasMany
        {
            return $this->hasMany(Matricula::class);
        }
}