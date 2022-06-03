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
			<?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($tran->outlet->nama); ?></td>                            
				<td><?php echo e($tran->member->nama); ?></td>
                <td><?php echo e($tran->tgl); ?></td>
                <td><?php echo e($tran->batas_waktu); ?></td>
            	<td><?php echo e($tran->tgl_bayar); ?></td>
                <td><?php echo e($tran->paket->jenis); ?></td>
                <td><?php echo e($tran->qty); ?> Kg</td>
                <td><?php echo e($tran->status); ?></td>
                <td><?php echo e($tran->bayar); ?></td>
				<td>Rp <?php echo e($tran->qty * $tran->paket->harga); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\laundry\resources\views/transaksi_crud/cetak_transaksi.blade.php ENDPATH**/ ?>