<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    //
    public function despesable()
    {
        return $this->morphTo();
    }
}
