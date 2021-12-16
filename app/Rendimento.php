<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendimento extends Model
{
    //
    public function despesas()
    {
        return $this->morphMany(Despesa::class, 'despesable');
    }
}
