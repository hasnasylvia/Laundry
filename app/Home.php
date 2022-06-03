<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function member(){
        return $this->belongsTo('App\Member', 'id_member', 'id');
    }

    public function outlet(){
        return $this->belongsTo('App\Outlet', 'id_outlet', 'id');
    }

    public function paket(){
        return $this->belongsTo('App\Paket', 'id_paket', 'id');
    }

    public function transaksi(){
        return $this->belongsTo('App\Transaksi', 'id_transakss')
    }
}
