<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tabel Transakis</h1>

    <!-- Form -->
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Tambah Transaksi</strong>
                        <a href="<?php echo e(route('tampil-transaksi')); ?>" class="btn btn-secondary btn-sm float-right">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="<?php echo e(route('tambah_transaksi')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label>Outlet</label>
                                    <select name="id_outlet" class="form-control">   
                                    <option value="option_select" disable selected>- Pilih Outlet -</option>
                                        <?php $__currentLoopData = $outlet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $out): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($out->id); ?>"><?php echo e($out->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <select name="id_member" class="form-control">
                                        <option value="option_select" disable selected>- Pilih Member -</option>
                                        <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($mem->id); ?>"><?php echo e($mem->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="tgl" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Batas Waktu</label>
                                    <input type="date" name="batas_waktu" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Bayar</label>
                                    <input type="date" name="tgl_bayar" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Paket</label>
                                    <select name="id_paket" class="form-control">
                                        <option value="option_select" disable selected>- Pilih Paket -</option>
                                        <?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($pak->id); ?>"><?php echo e($pak->jenis); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="integer" name="qty" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">- Pilih Status -</option>
                                        <option value="Baru">Baru</option>
                                        <option value="Proses">Proses</option>
                                        <option value="Selesai">Selesai</option>
                                        <option value="Diambil">Diambil</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Bayar</label>
                                    <select name="bayar" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <option value="Belum">Belum</option>
                                        <option value="Sudah">Sudah</option>
                                    </select>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laundry\resources\views/transaksi_crud/tambah_transaksi.blade.php ENDPATH**/ ?>