<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poupanca extends Model
{
    protected $fillable = [
        'motivo', 'valor_atual', 'valor_final'
    ];

    public function despesas()
    {
        return $this->morphMany(Despesa::class, 'despesable');
    }
}
