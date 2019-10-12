<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuanoutcome extends Model
{
    protected $table = 'satoutcome';
    public function satuan()
    {
        return $this->hasMany(Satuan::class, 'satoutcome', 'satoutcome');
    }
}
