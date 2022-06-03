<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'outlet';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nama', 'alamat'
    ];
}
