<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Funcionarios extends Model
{
    public function planos(): HasMany{
        return $this->hasMany(Planos::class);
    }
}
