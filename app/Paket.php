<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = [
        'kdsatker', 'nmpaket', 'pagurmp', 'keuangan', 'progres_keu', 'progres_fisik', 'ta'
    ];
    public function satker()
    {
        return $this->belongsTo(Satker::class);
    }
}
