<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuanoutput extends Model
{
    protected $table = 'satoutput';
    public function satuan()
    {
        return $this->hasMany(Satuan::class, 'satoutput', 'satoutput');
    }
}
