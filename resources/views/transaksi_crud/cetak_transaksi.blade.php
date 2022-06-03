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
		<h5>Laporan Transaksi</h4>	
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
			@foreach($transaksi as $tran)
			<tr>
				<td>{{$tran->outlet->nama}}</td>                            
				<td>{{$tran->member->nama}}</td>
                <td>{{$tran->tgl}}</td>
                <td>{{$tran->batas_waktu}}</td>
            	<td>{{$tran->tgl_bayar}}</td>
                <td>{{$tran->paket->jenis}}</td>
                <td>{{$tran->qty}} Kg</td>
                <td>{{$tran->status}}</td>
                <td>{{$tran->bayar}}</td>
				<td>Rp {{$tran->qty * $tran->paket->harga}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>