<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Funcionarios extends Authenticatable
{

    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'name_funcionario',
        'cargo',
    ];

    protected $table = 'funcionarios';


    public function planos(): HasMany{
        return $this->hasMany(Planos::class);
    }
}
