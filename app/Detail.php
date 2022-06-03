<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'detail';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nama', 'alamat', 'jk', 'telp'
    ];
}
