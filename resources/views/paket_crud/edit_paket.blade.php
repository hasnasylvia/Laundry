@extends('home.home')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tabel Paket</h1>

    <!-- Form -->
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Edit Paket</strong>
                        <a href="{{route('tampil-paket')}}" class="btn btn-secondary btn-sm float-right">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{route('edit_paket', $edit->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <input type="text" name="jenis" value="{{$edit->jenis}}" class="form-control" placeholder="Masukan Jenis">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" value="{{$edit->harga}}" class="form-control" placeholder="Masukan Harga">
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