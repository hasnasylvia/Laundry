<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Paket;
use DB;

class PaketController extends Controller
{
    public function insert(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'jenis' => 'required|string',
            'harga' => 'required|integer'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $pakets = Paket::create([
            'jenis' => $req->get('jenis'),
            'harga' => $req->get('harga')
        ]);

        // if($paket){
        //     return response()->json(['status' => 'paket ditambahkan']);
        // }else{
        //     return response()->json(['status' => 0]);
        // }
        $paket = DB::table('paket')->get();
        return view('paket_crud.paket', ['paket' => $paket]);
    }

    public function update(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'jenis'      => 'required',
            'harga'    => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ubah = Paket::where('id', $id)->update([
            'jenis'      => $req->jenis,
            'harga'      => $req->harga,
        ]);

        // if($ubah){
        //     return response()->json(['status' => 1]);
        // }else{
        //     return response()->json(['status' => 0]);
        // }

        $paket = DB::table('paket')->get();
        return view('paket_crud.paket', ['paket' => $paket]);
    }

    public function delete($id)
    {
        $hapus = Paket::where('id', $id)->delete();
        // if($hapus){
        //     return response()->json(['status' => 1]);
        // }else{
        //     return response()->json(['status' => 0]);
        // }
        $paket = DB::table('paket')->get();
        return view('paket_crud.tambah_paket', ['paket' => $paket]);
    }

    public function tampil(){
        $paket = DB::table('paket')->get();
        return view('paket_crud.paket', ['paket' => $paket]);
    }

    public function tambah(){
        $paket = DB::table('paket')->get();
        return view('paket_crud.tambah_paket', ['paket' => $paket]);
    }

    public function edit($id){
        $edit = paket::find($id);
        return view('paket_crud.edit_paket', ['edit' => $edit]);
    }
}
