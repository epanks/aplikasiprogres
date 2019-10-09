<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satoutput extends Model
{
    public function paketaccess()
    {
        return $this->hasMany(Paketaccess::class, 'satoutput', 'satoutput');
    }
}
