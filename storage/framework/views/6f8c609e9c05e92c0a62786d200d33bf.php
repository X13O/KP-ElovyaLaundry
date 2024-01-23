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
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('DataTables/datatables.min.css')); ?>" />
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
                                        class="fa fa-power-off text-primary mr-2"
                                        onclick="confirmLogout()"></i>Keluar</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            

            
            <div class="col-md-6 mb-2">
                <div class="row">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ml-3">
                        <h2>Edit Kategori</h2>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-body py-4">
                                <form method="POST" action="/dashboard/admin/kategori/<?php echo e($category->id); ?>">
                                    <?php echo method_field('put'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                                            value="<?php echo e($category->nama_kategori); ?>">
                                    </div>
                                    <button type=" submit" class="btn btn-primary mt-2">Edit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Include Bootstrap JS (jQuery and Popper.js required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('/sw.js')); ?>"></script>
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
</body><?php /**PATH D:\KP\projectKP\Websitenya\elovya-laundry\resources\views/dashboard/kategori/edit.blade.php ENDPATH**/ ?>