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
    <link rel="stylesheet" href="css/style.css">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://unpkg.com/feather-icons"></script>

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
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="bg-primary text-center py-2 shadow-sm sticky-top d-none d-md-block mx-auto">
        <a class="navbar-brand text-white" href="/dashboard"><i class="bi bi-card-text"></i> Elovya Laundry</a>
    </div>
    <br>
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
                                        onclick="return confirm('Yakin Mau Hapus Data??')"></i>Keluar</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            

            
            <div class="col-md-9 mb-2">
                <div class="row">
                    <!-- table transaksi -->
                    <div class="col-md-12 mb-2">
                        <?php if(session()->has('success')): ?>
                        <!-- Bootstrap Alert -->
                        <div class="alert alert-success alert-dismissible fade show text-lg-left" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-header bg-primary">
                                <div class="card-tittle text-white"><i class="fa fa-table"></i> <b>Data Pelanggan</b>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-striped table-bordered table-sm dt-responsive nowrap"
                                    id="table" width="100%">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th class="small font-weight-bold">No</th>
                                            <th class="small font-weight-bold">Email Pelanggan</th>
                                            <th class="small font-weight-bold">Username</th>
                                            <th class="small font-weight-bold">Nomor HP</th>
                                            <th class="small font-weight-bold">Alamat</th>
                                            <th class="small font-weight-bold">Role</th>
                                            <th class="small font-weight-bold no-print">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataPelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-left ">
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($dataPelanggan->email); ?></td>
                                            <td><?php echo e($dataPelanggan->username); ?></td>
                                            <td><?php echo e($dataPelanggan->nomor_hp); ?></td>
                                            <td><?php echo e($dataPelanggan->alamat); ?></td>
                                            <td><?php echo e($dataPelanggan->role); ?></td>
                                            <td class="no-print">
                                                <a href="/dashboard/admin/pelanggan/<?php echo e($dataPelanggan->id); ?>/edit"
                                                    class="badge bg-warning text-white mt-2 mb-2"><span
                                                        data-feather="edit"></span></a>
                                                <form action="/dashboard/admin/pelanggan/<?php echo e($dataPelanggan->id); ?>"
                                                    method="POST" class="d-inline">
                                                    <?php echo method_field('delete'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button class="badge bg-danger border-0 text-white mt-2 mb-2"
                                                        onclick="return confirm('Yakin Mau Hapus Data Pelanggan <?php echo e($dataPelanggan->username); ?>??')"><span
                                                            data-feather="x-circle"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end table transaksi -->
                </div>
            </div>
            
        </div>
    </div>

    <!-- Include Bootstrap JS (jQuery and Popper.js required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        feather.replace();
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

    <!-- Add this script at the end of your HTML body -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the "Cetak Laporan" button element by its ID
            var cetakLaporanBtn = document.querySelector('.btn-success');
    
            // Add a click event listener to the button
            cetakLaporanBtn.addEventListener('click', function () {
                // Print the content of the current page
                window.print();
            });
        });
    </script>
</body><?php /**PATH D:\KP\projectKP\Websitenya\elovya-laundry\resources\views/dashboard/pelanggan/index.blade.php ENDPATH**/ ?>