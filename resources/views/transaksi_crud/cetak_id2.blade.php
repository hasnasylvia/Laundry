<!-- cetak id -->
<html>
<head>
	<title>Laporan Transaksi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Naasky Laundry</h4>	
    </center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Outlet</th>
                <th>Nama</th> <!-- member -->
                <th>Tanggal</th> <!-- tgl -->
            	<th>Batas Waktu</th> <!-- batas_waktu -->
                <th>Tanggal Bayar</th> <!-- tgl_bayar -->
                <th>Paket</th>
                <th>Quantity</th> <!-- qty -->
                <th>Status</th>
                <th>Bayar</th>	
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
                @csrf
				<td>{{$cetak->outlet->nama}}</td>                            
				<td>{{$cetak->member->nama}}</td>
                <td>{{$cetak->tgl}}</td>
                <td>{{$cetak->batas_waktu}}</td>
            	<td>{{$cetak->tgl_bayar}}</td>
                <td>{{$cetak->paket->jenis}}</td>
                <td>{{$cetak->qty}} Kg</td>
                <td>{{$cetak->status}}</td>
                <td>{{$cetak->bayar}}</td>
				<td>Rp {{$cetak->qty * $cetak->paket->harga}}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>

<!-- detail id -->
@extends('home.home')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tabel Transaksi</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{route('tampil-transaksi')}}" class="btn btn-secondary btn-sm float-right"><i class="fa fa-undo"></i>Back</a>
                <table class="table table-bordered"     >
                    <thead>
                        <tr>
                            <th>Nama Outlet</th>
                            <th>Nama</th> <!-- member -->
                            <th>Tanggal</th> <!-- tgl -->
                            <th>Batas Waktu</th> <!-- batas_waktu -->
                            <th>Tanggal Bayar</th> <!-- tgl_bayar -->
                            <th>Paket</th>
                            <th>Quantity</th> <!-- qty -->
                            <th>Status</th>
                            <th>Bayar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        <tr>
                            <td>{{$detail->outlet->nama}}</td>
                            <td>{{$detail->member->nama}}</td>
                            <td>{{$detail->tgl}}</td>
                            <td>{{$detail->batas_waktu}}</td>
                            <td>{{$detail->tgl_bayar}}</td>
                            <td>{{$detail->paket->jenis}}</td>
                            <td>{{$detail->qty}} Kg</td> 
                            <td>{{$detail->status}}</td>
                            <td>{{$detail->bayar}}</td>
                            <td>
                                <a href="{{route('cetak_id', $detail->id)}}" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Cetak</a>
                            </td>
                        </tr>
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>
@endsection