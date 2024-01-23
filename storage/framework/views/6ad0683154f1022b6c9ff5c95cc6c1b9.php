<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elovya Laundry | <?php echo e($title); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo e(asset('fontawesome/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="<?php echo e(asset('logo.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('/manifest.json')); ?>">


    <style>
        .btn-group-xs>.btn,
        .btn-xs {
            padding: .25rem .4rem;
            font-size: .875rem;
            line-height: .5;
            border-radius: .2rem;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgb(17 26 104 / 10%);
        }

        .card-header {
            border-radius: 15px 15px 0px 0px !important;
        }

        .form-control {
            border-radius: 15px;
        }

        .btn {
            border-radius: 15px;
        }

        button.buttons-html5 {
            padding: .25rem .4rem !important;
            font-size: .875rem !important;
            line-height: .5 !important;
        }
    </style>
</head>

<body>
    
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="bg-primary text-center py-2 shadow-sm sticky-top d-none d-md-block mx-auto">
        <a class="navbar-brand text-white" href="/dashboard"><i class="bi bi-card-text"></i> Elovya Laundry</a>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-3 mb-2 d-none d-md-block">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-tittle text-white">Hallo, <?php echo e(auth()->user()->username); ?></div>
                    </div>
                    <div class="card-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin"><i
                                        class="fa fa-desktop text-primary mr-2"></i>Kasir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin/kategori"><i
                                        class="fa fa-list text-primary mr-2"></i>Kategori</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin/tipe"><i
                                        class="fa fa-list-ol text-primary mr-2"></i>Tipe Cucian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin/pelanggan"><i
                                        class="fa fa-list-ol text-primary mr-2"></i>Data
                                    Pelanggan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin/laporan"><i
                                        class="fa fa-chart-line text-primary mr-2"></i>Laporan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard"><i
                                        class="fa fa-table text-primary mr-2"></i>Dashboard</a>
                            </li>
                            <form action="/logout" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="nav-link border-0 bg-white"><i
                                        class="fa fa-power-off text-primary mr-2"></i>Keluar</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            

            
            <div class="col-sm-5 mb-2">
                <div class="card" id="print">
                    <div class="card-header bg-white border-0 pb-0 pt-4">
                        <div class="row">
                            <div class="col-8 col-sm-9 pr-0">
                                <ul class="pl-0 small" style="list-style: none;text-transform: uppercase;">
                                    <li>KASIR : <?php echo e(auth()->user()->username); ?></li>
                                </ul>
                                <ul class="pl-0 small" style="list-style: none;text-transform: uppercase;">
                                    <li>KODE TRANSAKSI : <?php echo e($post->kode_transaksi); ?></li>
                                </ul>
                            </div>
                            <div class="col-4 col-sm-3 pl-0">
                                <ul class="pl-0 small" style="list-style: none;">
                                    <li>TGL : <?php echo e($post->kapan_dibuat); ?>

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
                                <p><?php echo e($post->category->nama_kategori); ?></p>
                            </div>
                            <div class="col-5 px-0 text-center">
                                <span><b>Berat Cucian / Kg</b></span><br>
                                <span class="pt-5"><?php echo e($post->berat_cucian); ?> / Kg</span>
                            </div>
                            <div class="col-4 px-0 text-center">
                                <span><b>Tipe Cucian / Hari</b></span><br>
                                <span>
                                    <?php if($post->tipe && is_numeric($post->tipe->tipe_harga)): ?>
                                    <?php echo 'Rp. ' . number_format($post->tipe->tipe_harga, 0, ',', '.'); ?>
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
                                        <span><?php echo e($post->nama_konsumen); ?></span>
                                    </li>
                                    <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2"
                                        id="nomorKonsumen" data-nomor="<?php echo e($post->nomor_konsumen); ?>">
                                        <b>Nomor Whatsapp Konsumen</b>
                                        <span><?php echo e($post->nomor_konsumen); ?></span>
                                    </li>
                                    <li
                                        class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2">
                                        <b>Total Harga</b>
                                        <span><?php echo 'Rp. ' . number_format($post->total_harga, 0, ',', '.'); ?></span>
                                    </li>
                                    <li
                                        class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2">
                                        <b>Bayar</b>
                                        <span><?php echo 'Rp. ' . number_format($post->bayar, 0, ',', '.'); ?></span>
                                    </li>
                                    <li
                                        class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2">
                                        <b>Kembalian</b>
                                        <span><?php echo e($post->kembalian); ?></span>
                                    </li>
                                    <li
                                        class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center mt-2">
                                        <b>Status Transaksi</b>
                                        <span><?php echo e($post->status_transaksi); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-12 mt-3 text-center mt-5">
                                <p>* TERIMA KASIH TELAH MENGGUNAKAN JASA ELOVYA LAUNDRY*</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3 mb-5">
                    <button class="btn btn-primary-light btn-sm mr-2" onclick="printContent('print')"><i
                            class="fa fa-print mr-1"></i> Print</button>
                    <button class="btn btn-primary btn-sm" name="kirimPesan" type="submit" onclick="kirimPesan()"
                        id="buttonPesan"><i class="fa fa-check mr-1"></i>
                        Kirim Pesan Whatsapp</button>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Include Bootstrap JS (jQuery and Popper.js required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        function printContent(print) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(print).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
        }

        function kirimPesan() {
            // Mengambil nilai nomor konsumen dari atribut data-nomor
            var nomorTujuan = document.getElementById('nomorKonsumen').getAttribute('data-nomor');
            
            // Pastikan nomor telepon memiliki format yang benar (dengan kode negara, misalnya +62 untuk Indonesia)
            if (!nomorTujuan.startsWith('+')) {
            // Tambahkan kode negara sesuai dengan kebutuhan
            nomorTujuan = '+62' + nomorTujuan;
            }
            
            // Pesan yang ingin Anda kirim
            var pesan = 'Halo, Kami dari Elovya Laundry ingin menginfokan bahwa pakaian anda sudah selesai kami cuci. Silahkan diambil di loket kami dan kami mengucapkan Terimakasih karena sudah menggunakan jasa Laundry kami 🙏🙏.';
            
            // URL untuk membuka WhatsApp dengan nomor dan pesan yang sesuai
            var url = 'https://api.whatsapp.com/send?phone=' + nomorTujuan + '&text=' + encodeURIComponent(pesan);
            
            // Buka WhatsApp
            window.open(url);
        }
    </script>>

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
</body><?php /**PATH D:\KP\projectKP\Websitenya\elovya-laundry\resources\views/dashboard/laporan/show.blade.php ENDPATH**/ ?>