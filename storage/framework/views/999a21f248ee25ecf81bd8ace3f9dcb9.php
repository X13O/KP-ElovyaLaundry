<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elovya Laundry | <?php echo e($title); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('fontawesome/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('css/userStyle/style.css')); ?>" rel="stylesheet">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="<?php echo e(asset('logo.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('/manifest.json')); ?>">
    <style>
        .center-outer {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right text-lg-right">
                    <div class="d-inline-flex align-items-end">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="/dashboard" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">ELOVYA</span> LAUNDRY</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-3">
                        <a href="/dashboard" class="nav-item nav-link">
                            Dashboard</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Welcome, <?php echo e(auth()->user()->username); ?>

                            </a>
                            <ul class="dropdown-menu">
                                <form action="/logout" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="dropdown-item"><i
                                            class="fa-solid fa-arrow-right-from-bracket" onclick="confirmLogout()"></i>
                                        Logout</button>
                                </form>
                            </ul>
                        </li>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Postingan Start -->
    <div class="container-fluid mx-auto">
        <div class="row center-outer">
            <div class="col-sm-5 mb-2">
                <?php if($post->count()): ?>
                <div class="card">
                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-header bg-white border-0 pb-0 pt-4">
                        <div class="row">
                            <div class="col-8 col-sm-9 pr-0">
                                <ul class="pl-0 small" style="list-style: none;text-transform: uppercase;">
                                    <li>KODE TRANSAKSI : <?php echo e($singlePost->kode_transaksi); ?></li>
                                </ul>
                            </div>
                            <div class="col-4 col-sm-3 pl-0">
                                <ul class="pl-0 small" style="list-style: none;">
                                    <li>TGL : <?php echo e($singlePost->kapan_dibuat); ?>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body small pt-0">
                        <hr class="mt-0">
                        <div class="row">
                            <div class="col-3 pr-0">
                                <span><b>Nama Jasa</b></span>
                                <p><?php echo e($singlePost->category->nama_kategori); ?></p>
                            </div>
                            <div class="col-5 px-0 text-center">
                                <span><b>Berat Cucian / Kg</b></span><br>
                                <span class="pt-5"><?php echo e($singlePost->berat_cucian); ?> / Kg</span>
                            </div>
                            <div class="col-4 px-0 text-center">
                                <span><b>Tipe Cucian / Hari</b></span><br>
                                <span>
                                    <?php if($singlePost->tipe && is_numeric($singlePost->tipe->tipe_harga)): ?>
                                    <?php echo 'Rp. ' . number_format($singlePost->tipe->tipe_harga, 0, ',', '.'); ?>
                                    <?php else: ?>
                                    Tipe Harga Cucian Dihapus atau Kosong!!
                                    <?php endif; ?>
                                </span>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2">
                            </div>
                            <div class="col-12">
                                <hr class="mt-2">
                                <ul class="list-group border-0">
                                    <li
                                        class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2">
                                        <b>Nama Konsumen</b>
                                        <span><?php echo e($singlePost->nama_konsumen); ?></span>
                                    </li>
                                    <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2"
                                        id="nomorKonsumen" data-nomor="<?php echo e($singlePost->nomor_konsumen); ?>">
                                        <b>Nomor Whatsapp Konsumen</b>
                                        <span><?php echo e($singlePost->nomor_konsumen); ?></span>
                                    </li>
                                    <li
                                        class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2">
                                        <b>Total Harga</b>
                                        <span><?php echo 'Rp. ' . number_format($singlePost->total_harga, 0, ',', '.'); ?></span>
                                    </li>
                                    <li
                                        class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2">
                                        <b>Bayar</b>
                                        <span><?php echo 'Rp. ' . number_format($singlePost->bayar, 0, ',', '.'); ?></span>
                                    </li>
                                    <li
                                        class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2">
                                        <b>Kembalian</b>
                                        <span><?php echo e($singlePost->kembalian); ?></span>
                                    </li>
                                    <li
                                        class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2">
                                        <b>Status Transaksi</b>
                                        <span><?php echo e($singlePost->status_transaksi); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-12 mt-3 text-center mt-5">
                                <p>* TERIMA KASIH TELAH MENGGUNAKAN JASA ELOVYA LAUNDRY*</p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php else: ?>
                <p class="text-center mt-5">Tidak Ada Transaksi</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Postingan End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Fontawasome Javascript -->
    <script src="https://kit.fontawesome.com/ce8f519488.js" crossorigin="anonymous"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        if ("serviceWorker" in navigator) {
              // Register a service worker hosted at the root of the
              // site using the default scope.
              navigator.serviceWorker.register("/sw.js").then(
              (registration) => {
                 console.log("Service worker registration succeeded:", registration);
              },
              (error) => {
                 console.error(`Service worker registration failed: ${error}`);
              },
            );
          } else {
             console.error("Service workers are not supported.");
          }
    </script>
</body>

</html><?php /**PATH D:\KP\projectKP\Websitenya\elovya-laundry\resources\views/dashboard/post.blade.php ENDPATH**/ ?>