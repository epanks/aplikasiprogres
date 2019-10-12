<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Satuan extends Model
{
    protected $table = 'satuan';
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

    public function satuanoutput()
    {
        return $this->belongsTo(Satuanoutput::class, 'satoutput', 'satoutput');
    }

    public function satuanoutcome()
    {
        return $this->belongsTo(Satuanoutcome::class, 'satoutcome', 'satoutcome');
    }
}
