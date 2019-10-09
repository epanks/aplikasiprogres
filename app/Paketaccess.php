<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paketaccess extends Model
{
    protected $table = 'paketaccess';
    protected $fillable = [
        'kdsatker', 'nmpaket', 'pagurmp', 'trgoutput'
    ];
    public function satker()
    {
        return $this->belongsTo(Satker::class);
    }

    public function satoutput()
    {
        return $this->belongsTo(satoutput::class, 'satoutput', 'satoutput');
    }
}
