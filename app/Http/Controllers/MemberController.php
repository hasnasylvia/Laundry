<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Member;
use DB;

class MemberController extends Controller
{
    public function insert(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'nama'      => 'required|string',
            'alamat'    => 'required|string',
            'jk'        => 'required|string',
            'telp'      => 'required|string|max:13'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $members = Member::create([
            'nama'      => $req->get('nama'),
            'alamat'    => $req->get('alamat'),
            'jk'        => $req->get('jk'),
            'telp'      => $req->get('telp')
        ]);

        // if($member){
        //     return response()->json(['status' => 'member ditambahkan']);
        // }else{
        //     return response()->json(['status' => 0]);
        // }
        $member = DB::table('member')->get();
        return view('member_crud.member', ['member' => $member]);
    }

    public function delete($id)
    {
        $hapus = Member::where('id', $id)->delete();
        // if($hapus){
        //     return response()->json(['status' => 1]);
        // }else{
        //     return response()->json(['status' => 0]);
        // }
        $member = DB::table('member')->get();
        return view('member_crud.member', ['member' => $member]);
    }

    public function update(Request $req, $id)
    {
        $validator = Validator::make($req->all(), [
            'nama'      => 'required',
            'alamat'    => 'required',
            'jk'        => 'required',
            'telp'      => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $ubah = Member::where('id', $id)->update([
            'nama'      => $req->nama,
            'alamat'    => $req->alamat,
            'jk'        => $req->jk,
            'telp'      => $req->telp
        ]);

        // if($ubah){
        //     return response()->json(['status' => 1]);
        // }else{
        //     return response()->json(['status' => 0]);
        // }

        $member = DB::table('member')->get();
        return view('member_crud.member', ['member' => $member]);
    }

    public function tampil(){
        $member = DB::table('member')->get();
        return view('member_crud.member', ['member' => $member]);
    }

    public function tambah(){
        $member = DB::table('member')->get();
        return view('member_crud.tambah_member', ['member' => $member]);
    }

    public function edit($id){
        $edit = Member::find($id);
        return view('member_crud.edit_member', ['edit' => $edit]);
    }
}
