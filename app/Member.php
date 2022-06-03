<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nama', 'alamat', 'jk', 'telp'
    ];
}
