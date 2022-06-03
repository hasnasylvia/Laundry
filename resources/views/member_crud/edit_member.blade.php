@extends('home.home')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tabel Member</h1>

    <!-- Form -->
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Edit Member</strong>
                        <a href="{{route('tampil-member')}}" class="btn btn-secondary btn-sm float-right">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{route('edit_member', $edit->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" value="{{$edit->nama}}" class="form-control" placeholder="Masukan Nama">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" value="{{$edit->alamat}}" class="form-control" placeholder="Masukan Alamat">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jk" value="{{$edit->jk}}" class="form-control">
                                        <option value="">- Pilih Jenis Kelamin -</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type="text" name="telp" value="{{$edit->telp}}" class="form-control" placeholder="Masukan No Telp">
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection