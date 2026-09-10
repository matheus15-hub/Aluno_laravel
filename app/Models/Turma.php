<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turma extends Model
{
    protected $table = 'turmas';

    protected $fillable = [
        'nome',
        'user_id',
        'curso_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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