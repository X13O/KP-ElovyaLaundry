<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elovya Laundry | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


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
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right text-lg-right">
                    <div class="d-inline-flex align-items-end">
                        <a class="text-white px-3"
                            href="https://api.whatsapp.com/send/?phone=6281351207653&text&type=phone_number&app_absent=0"
                            target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.instagram.com/elaundry.pontianak/" target="_blank">
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
                <a href="/" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">ELOVYA</span> LAUNDRY</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3 py-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Beranda</a>
                        <a href="#about" class="nav-item nav-link">Tentang</a>
                        <a href="#service" class="nav-item nav-link">Layanan</a>
                        <a href="#price" class="nav-item nav-link">Harga</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
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
                                <a href="#search" class="nav-item nav-link ml-2"><i
                                        class="fa-solid fa-magnifying-glass mt-1"></i>
                                    <p class="ml-1">Search</p>
                                </a>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                                <a href="/dashboard/admin" class="nav-item nav-link ml-2"><i
                                        class="fa-regular fa-user mt-1"></i></i>
                                    <p class="ml-1">Admin</p>
                                </a>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <section id="home">
        <div class="container-fluid p-0">
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/gambar1.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3">Elovya Laundry</h4>
                                <h1 class="display-3 text-white mb-md-4">Layanan Laundry Terbaik</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/gambar3.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3">Elocya Laundry</h4>
                                <h1 class="display-3 text-white mb-md-4">Dikerjakan oleh Staff yang Berpengalaman</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- Contact Info Start -->
        <div class="container-fluid contact-info mt-5 mb-4">
            <div class="container" style="padding: 0 30px;">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0"
                        style="height: 100px;">
                        <div class="d-inline-flex">
                            <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-white font-weight-medium">Lokasi Elovya Laundry</h5>
                                <p class="m-0 text-white">Jalan Ampera, disebelah SPBU Ampera</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0"
                        style="height: 100px;">
                        <div class="d-inline-flex text-left">
                            <i class="fa fa-2x fa-instagram text-white m-0 mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-white font-weight-medium">Instagram Kami</h5>
                                <p class="m-0 text-white">elaundry.pontianak</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0"
                        style="height: 100px;">
                        <div class="d-inline-flex text-left">
                            <i class="fa fa-2x fa-whatsapp text-white m-0 mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-white font-weight-medium">Hubungi Kami</h5>
                                <p class="m-0 text-white">+62813-5120-7653</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Info End -->
    </section>
    <!-- Carousel End -->


    <!-- About Start -->
    <section id="about">
        <div class="container-fluid py-5">
            <div class="container pt-0 pt-lg-4">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img class="img-fluid" src="img/gambar2.jpeg" alt="">
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                        <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Tentang Elovya Laundry</h6>
                        <h1 class="mb-4">Kami Penyedia Laundry Berkualitas Di Kota Pontianak</h1>
                        <p class="mb-2">Elovya Laundry adalah penyedia jasa laundry yang berkomitmen untuk memberikan
                            layanan pencucian pakaian berkualitas
                            tinggi dengan penuh perhatian kepada pelanggan kami. Kami menawarkan berbagai jenis layanan
                            pencucian untuk memenuhi
                            kebutuhan beragam pakaian Anda, dari laundry harian, cucian satuan, dan lain lain</p>
                        <div class="row">
                            <div class="col-sm-6 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary mr-2"></i>
                                    <p class="text-secondary font-weight-medium m-0">Layanan Laundry Berkualitas</p>
                                </div>
                            </div>
                            <div class="col-sm-6 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary mr-2"></i>
                                    <p class="text-secondary font-weight-medium m-0">Pengerjaan Cepat dan Bersih</p>
                                </div>
                            </div>
                            <div class="col-sm-6 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary mr-2"></i>
                                    <p class="text-secondary font-weight-medium m-0">Dikerjakan oleh Ahlinya Sehingga
                                        Dijamin Pakaian Aman</p>
                                </div>
                            </div>
                            <div class="col-sm-6 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary mr-2"></i>
                                    <p class="text-secondary font-weight-medium m-0">Jaminan Kepuasan 100%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->


    <!-- Services Start -->
    <section id="service">
        <div class="container-fluid pt-5 pb-3">
            <div class="container">
                <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Jasa Yang Tersedia Pada
                    Elovya
                    Laundry</h6>
                <h1 class="display-4 text-center mb-5">Apa yang Kami Tawarkan?</h1>
                <div class="row">
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">Cuci Lipat</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fas fa-3x fa-tshirt text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">Cuci Satuan</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                            style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                                style="width: 100px; height: 100px;">
                                <i class="fa fa-3x fa-burn text-secondary"></i>
                            </div>
                            <h4 class="font-weight-bold m-0">Cuci Setrika</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Fitur Elovya Laundry</h6>
                    <h1 class="mb-4">Kenapa Harus Memilih Elovya Laundry?</h1>
                    <p>Elovya Laundry memiliki reputasi yang sangat baik dalam menjaga kualitas pakaian dan memberikan
                        layanan
                        yang sangat andal. Elovya Laundry dapat menjadi pilihan karena mereka selalu memberikan hasil
                        pencucian yang sangat bersih dan rapi untuk
                        semua jenis pakaian. Harga yang ditawarkan juga cukup wajar, dan kualitas layanan dari Elovya
                        Laundry
                        sepadan dengan biaya yang dibayarkan.</p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">2</h1>
                            <h5 class="font-weight-bold">Tahun Pengalaman</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">2</h1>
                            <h5 class="font-weight-bold">Pekerja Ahli</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">1250</h1>
                            <h5 class="font-weight-bold">Konsumen Yang Dengan Layanan Yang Diberikan</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">9550</h1>
                            <h5 class="font-weight-bold">Laundry Yang Telah Diselesaikan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
                        <i class="fa fa-5x fa-certificate text-white mb-5"></i>
                        <h1 class="display-1 text-white mb-3">2+</h1>
                        <h1 class="text-white m-0">Tahun Pengalaman</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Working Process Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">proses yang terdapat pada
                elovya laundry</h6>
            <h1 class="display-4 text-center mb-5">Bagaimana Proses Laundy di Elovya Laundry?</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4"
                            style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">1</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Datang ke Lokasi</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4"
                            style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">2</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Dilakukan Penghitungan</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4"
                            style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">3</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Dilakukan Pencucian</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4"
                            style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">4</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Ketika Sudah Selesai, Akan di Berikan Notifikasi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Process End -->


    <!-- Pricing Plan Start -->
    <section id="price">
        <div class="container-fluid py-5">
            <div class="container">
                <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Layanan yang ditawarkan di
                    Elovya Laundry</h6>
                <h1 class="display-4 text-center mb-5">Berapa Harga Layanan di Elovya Laundry?</h1>
                <div class="owl-carousel testimonial-carousel mb-4">
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">CUCI SETRIKA</h5>
                            <h5 class="text-muted text-primary">3 HARI</h5>
                            <p class="m-0">Jasa Cuci Setrika dengan estimasi pengerjaan 3 hari dikenakan biaya sebesar
                                Rp. 6000 / Kg nya.</p>
                            <p>(Minimal 3 Kg)</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">CUCI SETRIKA</h5>
                            <h5 class="text-muted text-primary">2 HARI</h5>
                            <p class="m-0">Jasa Cuci Setrika dengan estimasi pengerjaan 2 hari dikenakan biaya sebesar
                                Rp. 7000 / Kg nya.</p>
                            <p>(Minimal 3 Kg)</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">CUCI SETRIKA</h5>
                            <h5 class="text-muted text-primary">1 HARI</h5>
                            <p class="m-0">Jasa Cuci Setrika dengan estimasi pengerjaan 1 hari dikenakan biaya sebesar
                                Rp. 8000 / Kg nya.</p>
                            <p>(Minimal 3 Kg)</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">CUCI SETRIKA</h5>
                            <h5 class="text-muted text-primary">Express</h5>
                            <p class="m-0">Jasa Cuci Setrika dengan pengerjaan Express dikenakan biaya sebesar
                                Rp. 18000 / Kg nya. Pengerjaan Express estimasinya adalah 5 Jam</p>
                            <p>(Minimal 2 Kg)</p>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel testimonial-carousel mb-4">
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">CUCI LIPAT</h5>
                            <h5 class="text-muted text-primary">3 HARI</h5>
                            <p class="m-0">Jasa Cuci Lipat dengan estimasi pengerjaan 3 hari dikenakan biaya sebesar
                                Rp. 5000 / Kg nya.</p>
                            <p>(Minimal 3 Kg)</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">CUCI LIPAT</h5>
                            <h5 class="text-muted text-primary">2 HARI</h5>
                            <p class="m-0">Jasa Cuci Lipat dengan estimasi pengerjaan 2 hari dikenakan biaya sebesar
                                Rp. 6000 / Kg nya.</p>
                            <p>(Minimal 3 Kg)</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">CUCI LIPAT</h5>
                            <h5 class="text-muted text-primary">1 HARI</h5>
                            <p class="m-0">Jasa Cuci Lipat dengan estimasi pengerjaan 1 hari dikenakan biaya sebesar
                                Rp. 7000 / Kg nya.</p>
                            <p>(Minimal 3 Kg)</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">CUCI LIPAT</h5>
                            <h5 class="text-muted text-primary">Express</h5>
                            <p class="m-0">Jasa Cuci Lipat dengan pengerjaan Express dikenakan biaya sebesar
                                Rp. 15000 / Kg nya. Pengerjaan Express estimasinya adalah 5 Jam</p>
                            <p>(Minimal 2 Kg)</p>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel testimonial-carousel mb-4">
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">SETRIKA SAJA</h5>
                            <h5 class="text-muted text-primary">3 HARI</h5>
                            <p class="m-0">Jasa Setrika Saja dengan estimasi pengerjaan 3 hari dikenakan biaya sebesar
                                Rp. 5000 / Kg nya.</p>
                            <p>(Minimal 3 Kg)</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">SETRIKA SAJA</h5>
                            <h5 class="text-muted text-primary">2 HARI</h5>
                            <p class="m-0">Jasa Setrika Saja dengan estimasi pengerjaan 2 hari dikenakan biaya sebesar
                                Rp. 6000 / Kg nya.</p>
                            <p>(Minimal 3 Kg)</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">SETRIKA SAJA</h5>
                            <h5 class="text-muted text-primary">1 HARI</h5>
                            <p class="m-0">Jasa Setrika Saja dengan estimasi pengerjaan 1 hari dikenakan biaya sebesar
                                Rp. 7000 / Kg nya.</p>
                            <p>(Minimal 3 Kg)</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="bg-light text-center p-4 pt-0">
                            <h5 class="font-weight-medium mt-5">SETRIKA SAJA</h5>
                            <h5 class="text-muted text-primary">Express</h5>
                            <p class="m-0">Jasa Setrika Saja dengan pengerjaan Express dikenakan biaya sebesar
                                Rp. 15000 / Kg nya. Pengerjaan Express estimasinya adalah 5 Jam</p>
                            <p>(Minimal 2 Kg)</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">LAUNDRY SATUAN</h5>
                        <p class="m-0">Jasa Laundry Satuan start harga mulai dari Rp. 10000 sampai dengan Rp. 50000
                        </p>
                        <p>(Harga sudah termasuk plastik packing)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Plan End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-8 col-md-6 mb-5">
                <h1 class="text-secondary mb-3"><span class="text-white">ELOVYA</span> LAUNDRY</h1>
                <p>Elovya Laundry didirikan pada tahun 2019 dengan visi untuk menjadi penyedia jasa laundry terpercaya
                    di wilayah ini. Kami
                    memiliki komitmen yang kuat untuk memberikan hasil pencucian yang berkualitas tinggi dan kepuasan
                    pelanggan yang
                    konsisten. Kami berterima kasih kepada pelanggan kami yang telah memberikan dukungan dan kepercayaan
                    kepada kami.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;"
                        href="https://api.whatsapp.com/send/?phone=6281351207653&text&type=phone_number&app_absent=0"
                        target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://www.instagram.com/elaundry.pontianak/"
                        target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <section id="search">
                    <form action="/dashboard/post">
                        <div class="input-group mb-3 mt-3">
                            <input type="text" class="form-control" placeholder="Cari Transaksi.... (kode transaksi)"
                                name="search" required>
                            <button class="btn btn-outline-secondary" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </section>
                <h4 class="text-white mb-4">Lokasi Elovya Laundry</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Jalan Ampera, disebelah SPBU Ampera</p>
                <p><i class="fa fa-whatsapp mr-2"></i>+62813-5120-7653</p>
                <p><i class="fa fa-instagram mr-2"></i>elaundry.pontianak</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


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

</html><?php /**PATH D:\KP\projectKP\Websitenya\elovya-laundry\resources\views/dashboard/index.blade.php ENDPATH**/ ?>