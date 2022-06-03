<?php $__env->startSection('content'); ?>
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
                <a href="/transaksi/cetak_pdf" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Cetak</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th> <!-- member -->
                            <th>Tanggal</th>
                            <th>Paket</th>
                            <th>Quantity</th> <!-- qty -->
                            <th>Status</th>
                            <th>Bayar</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($tran->member->nama); ?></td>
                            <td><?php echo e($tran->tgl); ?></td>
                            <td><?php echo e($tran->paket->jenis); ?></td>
                            <td><?php echo e($tran->qty); ?></td> 
                            <td><?php echo e($tran->status); ?></td>
                            <td><?php echo e($tran->bayar); ?></td>
                            <td>Rp <?php echo e($tran->qty * $tran->paket->harga); ?></td>
                            <td>
                                <a href="<?php echo e(route('edit-transaksi', $tran->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                <form action="<?php echo e(route('hapus-transaksi', $tran->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                <a href="<?php echo e(route('tampil-detail', $tran->id)); ?>" class="btn btn-success btn-sm">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laundry\resources\views/transaksi_crud/transaksi.blade.php ENDPATH**/ ?>