<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Transaksi;
use App\Outlet;
use App\Member;
use App\Paket;
use PDF;
use DB;

class TransaksiController extends Controller
{
    public function insert(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'id_outlet'     => 'required',
            'id_member'     => 'required',
            'tgl'           => 'required',
            'batas_waktu'   => 'required',
            'tgl_bayar'     => '',
            'id_paket'      => 'required',
            'qty'           => 'required',
            'status'        => 'required',
            'bayar'         => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $transaksis = Transaksi::create([
            'id_outlet'     => $req->get('id_outlet'),
            'id_member'     => $req->get('id_member'),
            'tgl'           => $req->get('tgl'),
            'batas_waktu'   => $req->get('batas_waktu'),
            'tgl_bayar'     => $req->get('tgl_bayar'),
            'id_paket'      => $req->get('id_paket'),
            'qty'           => $req->get('qty'),
            'status'        => $req->get('status'),
            'bayar'         => $req->get('bayar'),
        ]);  

        // $post = new Transaksi();
        // $post->id_outlet = $req->id_outlet;
        // $post->id_member = $req->id_member;
        // $post->tgl = $req->tgl;
        // $post->batas_waktu = $req->batas_waktu;
        // $post->tgl_bayar = $req->tgl_bayar;
        // $post->id_paket = $req->id_paket;
        // $post->qty = $req->qty;
        // $post->total = $req->qty * $paket->harga;
        // $post->status = $req->status;
        // $post->bayar = $req->bayar;
        // $post->id_user = $user->id;
        // $post->save();

        // if($transaksi){
        //     return response()->json(['status' => 1]);
        // }else{
        //     return response()->json(['status' => 0]);
        // }

        // $transaksi = DB::table('transaksi')->get();
        return redirect('/tampil_transaksi');
    }

    public function delete($id)
    {
        $hapus = Transaksi::where('id', $id)->delete();
        // if($hapus){
        //     return response()->json(['status' => 1]);
        // }else{
        //     return response()->json(['status' => 0]);
        // }
        return redirect('/tampil_transaksi');
    }

    public function update(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'tgl_bayar'     => 'required',
            'status'        => 'required',
            'bayar'         => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ubah = Transaksi::where('id', $id)->update([
            'tgl_bayar'     => $req->tgl_bayar,
            'status'        => $req->status,
            'bayar'         => $req->bayar,
        ]);

        // if($ubah){
        //     return response()->json(['status' => 1]);
        // }else{
        //     return response()->json(['status' => 0]);
        // }

        // $transaksi = DB::table('transaksi')->get();
        // return view('transaksi_crud.transaksi', ['transaksi' => $transaksi]);
        return redirect('/tampil_transaksi');
    }

    public function tampil(){
        $transaksi = Transaksi::get();
        return view('transaksi_crud.transaksi', ['transaksi' => $transaksi]);
    }

    public function detail($id){
        $detail = Transaksi::find($id);
        return view('transaksi_crud.detail_transaksi', compact('detail'));
    }

    public function detailOwner($id){
        $detail = Transaksi::find($id);
        return view('transaksi_crud.detail_owner', compact('detail'));
    }

    public function tampilOwner(){
        $transaksi = Transaksi::get();
        return view('transaksi_crud.transaksi_owner', ['transaksi' => $transaksi]);
    }

    public function tambah(){
        $outlet = DB::table('outlet')->select('id', 'nama')->get();
        $member = DB::table('member')->select('id', 'nama')->get();
        $paket = DB::table('paket')->select('id', 'jenis')->get();
        // return view('transaksi_crud.tambah_transaksi', 
        //             ['outlet' => $outlet],
        //             ['member' => $member],
        //             ['paket' => $paket],
        //             ['users' => $user]);
        return view('transaksi_crud.tambah_transaksi', compact('outlet', 'member', 'paket'));
    }

    public function edit($id){
        $edit = Transaksi::find($id);
        return view('transaksi_crud.edit_transaksi', compact('edit'));
    }

    public function cetakId($id){
        $cetak = Transaksi::where('id', $id)->first();
        $pdf = PDF::loadview('transaksi_crud.cetak_id', compact('cetak'));
        return $pdf->stream();
    }

    public function cetak_pdf(){
        $transaksi = Transaksi::all();
        $pdf = PDF::loadview('transaksi_crud.cetak_transaksi', ['transaksi' => $transaksi]);
        return $pdf->download('laporan-transaksi-pdf');
    }
    
}