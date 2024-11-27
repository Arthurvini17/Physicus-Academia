<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Planos extends Model


{

    use HasFactory;

    protected $fillable = [
        'funcionario_id',
        'name_plano',
        'descricao_plano',
    ];

    public function funcionarios(): BelongsTo
    {
        return $this->belongsTo(Funcionarios::class);
    }
}
