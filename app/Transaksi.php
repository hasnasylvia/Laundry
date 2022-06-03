<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id_outlet', 'id_member', 'tgl', 'batas_waktu', 'tgl_bayar', 'id_paket', 'qty', 'status', 'bayar', 'id_user'
    ];
    public function member(){
        return $this->belongsTo('App\Member', 'id_member', 'id');
    }

    public function outlet(){
        return $this->belongsTo('App\Outlet', 'id_outlet', 'id');
    }

    public function paket(){
        return $this->belongsTo('App\Paket', 'id_paket', 'id');
    }
}
