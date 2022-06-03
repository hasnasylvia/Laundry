<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tabel outlet</h1>

    <!-- Form -->
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Edit outlet</strong>
                        <a href="<?php echo e(route('tampil-outlet')); ?>" class="btn btn-secondary btn-sm float-right">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="<?php echo e(route('edit_outlet', $edit->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label>Nama Outlet</label>
                                    <input type="text" name="nama" value="<?php echo e($edit->nama); ?>" class="form-control" placeholder="Masukan Nama Outlet">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Outlet</label>
                                    <input type="text" name="alamat" value="<?php echo e($edit->alamat); ?>" class="form-control" placeholder="Masukan Alamat Outlet">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laundry\resources\views/outlet_crud/edit_outlet.blade.php ENDPATH**/ ?>