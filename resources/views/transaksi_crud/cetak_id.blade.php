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
		
	@csrf
	<table style="width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;" border = "0">
        <td width="70%" style="padding-right:80px; vertical-align:top">
            <span style='font-size:12pt'><b>{{$cetak->outlet->nama}}</b></span><br>
            Alamat : {{$cetak->outlet->alamat}}<br>
            Tanggal Transaksi : {{$cetak->tgl}}<br>
        </td>   
        <td style="vertical-align:top" width="30%">
    		<b><span style='font-size:12pt'>Nota Transaksi</span></b><br>
            Atas Nama : {{$cetak->member->nama}}<br>
            Batas Pembayaran : {{$cetak->batas_waktu}}<br>
        </td>  
    </table> 
    <table class="table table-bordered" id="dataTable" width="100%">
        <thead>
            <tr>
            	<th>Paket</th>
                <th>Quantity</th> <!-- qty -->
                <th>Status</th>
                <th>Bayar</th>
				<th>Harga per kilo</th>
				<th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr> 
                <td>{{$cetak->paket->jenis}}</td>
                <td>{{$cetak->qty}} Kg</td> 
                <td>{{$cetak->status}}</td>
                <td>{{$cetak->bayar}}</td>
				<td>Rp {{$cetak->paket->harga}}</td>
				<td>Rp {{$cetak->qty * $cetak->paket->harga}}</td>
            </tr>
        </tbody>
    </table> 
</body>
</html>