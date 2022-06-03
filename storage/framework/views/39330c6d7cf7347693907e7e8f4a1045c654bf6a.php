<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Naasky Laundry </title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('template/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template/css/custom.css')); ?>">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('template/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Naasky Laundry <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <?php if(auth()->user()->role=="Admin"): ?>
            <!-- OUTLET -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Outlet</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Outlet Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-outlet')); ?>">Tabel Outlet</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-outlet')); ?>">Tambah Outlet</a>
                    </div>
                </div>
            </li>

            <!-- PAKET -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Paket</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Paket Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-paket')); ?>">Tabel Paket</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-paket')); ?>">Tambah Paket</a>
                    </div>
                </div>
            </li>

            <!-- MEMBER -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Member</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Member Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-member')); ?>">Tabel Member</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-member')); ?>">Tambah Member</a>
                    </div>
                </div>
            </li>

            <!-- TRANSAKSI -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Transaksi Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-transaksi')); ?>">Tabel Transaksi</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-transaksi')); ?>">Tambah Transaksi</a>
                    </div>
                </div>
            </li>
            <?php endif; ?>
            <?php if(auth()->user()->role=="Kasir"): ?>
            <!-- MEMBER -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Member</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Member Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-member')); ?>">Tabel Member</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-member')); ?>">Tambah Member</a>
                    </div>
                </div>
            </li>
            <!-- TRANSAKSI -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Transaksi Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-transaksi')); ?>">Tabel Transaksi</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-transaksi')); ?>">Tambah Transaksi</a>
                    </div>
                </div>
            </li>
            <?php endif; ?>
            <?php if(auth()->user()->role=="Owner"): ?>
            <!-- TRANSAKSI -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Transaksi Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-owner')); ?>">Tabel Transaksi</a>
                    </div>
                </div>
            </li>
            <?php endif; ?>

            <!-- OUTLET
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Outlet</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Outlet Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-outlet')); ?>">Tabel Outlet</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-outlet')); ?>">Tambah Outlet</a>
                    </div>
                </div>
            </li>

            PAKET
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Paket</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Paket Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-paket')); ?>">Tabel Paket</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-paket')); ?>">Tambah Paket</a>
                    </div>
                </div>
            </li>

            MEMBER
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Member</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Member Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-member')); ?>">Tabel Member</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-member')); ?>">Tambah Member</a>
                    </div>
                </div>
            </li>

            TRANSAKSI
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Transaksi Utilities:</h6>
                        <a class="collapse-item" href="<?php echo e(route('tampil-transaksi')); ?>">Tabel Transaksi</a>
                        <a class="collapse-item" href="<?php echo e(route('tambah-transaksi')); ?>">Tambah Transaksi</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('template/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('template/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('template/js/sb-admin-2.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laundry\resources\views/layout/sidebar.blade.php ENDPATH**/ ?>