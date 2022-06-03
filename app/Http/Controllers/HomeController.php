<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Outlet;
use App\Transaksi;
use App\Paket;
use DB;

class HomeController extends Controller
{
    public function index(){
        $member = DB::table('member')->count();
        $outlet = DB::table('outlet')->count();
        $transaksi = DB::table('transaksi')->count();
        $paket = DB::table('paket')->count();
        return view('home.dashboard', compact('outlet', 'member', 'transaksi', 'paket'));
    }
}
