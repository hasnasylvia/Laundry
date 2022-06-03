<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Outlet;
use DB;

class OutletController extends Controller
{
    public function insert(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'nama' => 'required|string',
            'alamat' => 'required|string',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $outlets = Outlet::create([
            'nama' => $req->get('nama'),
            'alamat' => $req->get('alamat'),
        ]);
        // if($outlet){
        //     return response()->json(['status' => 'outlet ditambahkan']);
        // }else{
        //     return response()->json(['status' => 0]);
        // }
        
        $outlet = DB::table('outlet')->get();
        return view('outlet_crud.outlet', ['outlet' => $outlet]);
    }

    public function delete($id)
    {
        $hapus = Outlet::where('id', $id)->delete();
        // if($hapus){
        //     return response()->json(['status' => 1]);
        // }else{
        //     return response()->json(['status' => 0]);
        // }
        $outlet = DB::table('outlet')->get();
        return view('outlet_crud.outlet', ['outlet' => $outlet]);
    }

    public function update(Request $req, $id){
        $validator = Validator::make($req->all(), [
            'nama'      => 'required',
            'alamat'    => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ubah = Outlet::where('id', $id)->update([
            'nama'      => $req->nama,
            'alamat'    => $req->alamat,
        ]);
        // if($ubah){
        //     return response()->json(['status' => 1]);
        // }else{
        //     return response()->json(['status' => 0]);
        // }

        $outlet = DB::table('outlet')->get();
        return view('outlet_crud.outlet', ['outlet' => $outlet]);
    }

    public function tampil(){
        $outlet = DB::table('outlet')->get();
        return view('outlet_crud.outlet', ['outlet' => $outlet]);
    }

    public function tambah(){
        $outlet = DB::table('outlet')->get();
        return view('outlet_crud.tambah_outlet', ['outlet' => $outlet]);
    }

    public function edit($id){
        $edit = outlet::find($id);
        return view('outlet_crud.edit_outlet', ['edit' => $edit]);
    }
}
