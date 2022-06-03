@extends('home.home')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tabel Outlet</h1>

    <!-- Form -->
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Tambah Outlet</strong>
                        <a href="{{route('tampil-outlet')}}" class="btn btn-secondary btn-sm float-right">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{route('tambah_outlet')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Outlet</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Outlet">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Outlet</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Outlet">
                                </div>
                                <button type="submit" class="btn btn-success">Tambah</button>
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