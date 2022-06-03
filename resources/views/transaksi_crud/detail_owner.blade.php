@extends('home.home')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tabel Transaksi</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- <a href="{{route('tampil-transaksi')}}" class="btn btn-secondary btn-sm float-right"><i class="fa fa-undo"></i>Back</a> -->
                <table style="width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;" border = "0">
                    @csrf
                    <td width="70%" align="left" style="padding-right:80px; vertical-align:top">
                        <span style='font-size:12pt'><b>{{$detail->outlet->nama}}</b></span></br>
                        Alamat : {{$detail->outlet->alamat}}</br>
                        Tanggal Transaksi : {{$detail->tgl}}</br>
                    </td>   
                    <td style="vertical-align:top" width="30%">
                        <b><span style='font-size:12pt'>Nota Transaksi</span></b></br>
                        Atas Nama : {{$detail->member->nama}}</br>
                        Batas Pembayaran : {{$detail->batas_waktu}}
                    </td>  
                </table> 
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Paket</th>
                            <th>Quantity</th> <!-- qty -->
                            <th>Status</th>
                            <th>Bayar</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        <tr> 
                            <td>{{$detail->paket->jenis}}</td>
                            <td>{{$detail->qty}} Kg</td> 
                            <td>{{$detail->status}}</td>
                            <td>{{$detail->bayar}}</td>
                            <td>Rp {{$detail->qty * $detail->paket->harga}}</td>
                        </tr>
                    </tbody>
                </table> 
                <a href="{{route('cetak_id', $detail->id)}}" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Cetak</a>
                <a href="{{route('tampil-owner')}}" class="btn btn-secondary btn-sm float-right"><i class="fa fa-undo"></i>Back</a>
            </div>
        </div>
    </div>
</div>
@endsection