<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'jenis', 'harga'
    ];
}
