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
		
	<?php echo csrf_field(); ?>
	<table style="width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;" border = "0">
        <td width="70%" style="padding-right:80px; vertical-align:top">
            <span style='font-size:12pt'><b><?php echo e($cetak->outlet->nama); ?></b></span><br>
            Alamat : <?php echo e($cetak->outlet->alamat); ?><br>
            Tanggal Transaksi : <?php echo e($cetak->tgl); ?><br>
        </td>   
        <td style="vertical-align:top" width="30%">
    		<b><span style='font-size:12pt'>Nota Transaksi</span></b><br>
            Atas Nama : <?php echo e($cetak->member->nama); ?><br>
            Batas Pembayaran : <?php echo e($cetak->batas_waktu); ?><br>
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
                <td><?php echo e($cetak->paket->jenis); ?></td>
                <td><?php echo e($cetak->qty); ?> Kg</td> 
                <td><?php echo e($cetak->status); ?></td>
                <td><?php echo e($cetak->bayar); ?></td>
				<td>Rp <?php echo e($cetak->paket->harga); ?></td>
				<td>Rp <?php echo e($cetak->qty * $cetak->paket->harga); ?></td>
            </tr>
        </tbody>
    </table> 
</body>
</html><?php /**PATH C:\xampp\htdocs\laundry\resources\views/transaksi_crud/cetak_id.blade.php ENDPATH**/ ?>